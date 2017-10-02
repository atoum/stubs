#!/usr/bin/env php
<?php

function parseFile($filename)
{
	$helps = [
		'level1' => [],
		'level2' => [],
	];
	$previousLine = null;
	$currentAsserter = null;
	$currentMethod = null;
	$level3Name = null;
	foreach (new \SplFileObject($filename) as $line)
	{
		$line = rtrim($line);
		if (preg_match('/^[=]+$/', $line))
		{
			$currentAsserter = strtolower($previousLine);
			$helps[ 'level1' ][ $currentAsserter ] = [
				'content' => '',
				'level2' => [
					$currentMethod => [
						'content' => '',
					],
				],
			];

			$previousLine = $line;
			$level3Name = null;
			$currentMethod = null;
			continue;
		}

		if (preg_match('/^[-]+$/', $line))
		{
			$currentMethod = strtolower($previousLine);
			$helps[ 'level1' ][ $currentAsserter ][ 'level2' ][ $currentMethod ][ 'content' ] = '';
			$previousLine = $line;
			$level3Name = null;
			continue;
		}

		if (preg_match('/^[~]+$/', $line))
		{
			$level3Name = strtolower($previousLine);
			$helps[ 'level1' ][ $currentAsserter ][ 'level2' ][ $currentMethod ][ 'level3' ][ $level3Name ][ 'content' ] = '';
			$previousLine = $line;
			continue;
		}

		if (null !== $currentAsserter)
		{
			if (null === $currentMethod)
			{
				$helps[ 'level1' ][ $currentAsserter ][ 'content' ] .= $previousLine . PHP_EOL;
			}
			else
			{
				if (null !== $level3Name)
				{
					$helps[ 'level1' ][ $currentAsserter ][ 'level2' ][ $currentMethod ][ 'level3' ][ $level3Name ][ 'content' ] .= $previousLine . PHP_EOL;
				}
				else
				{
					$helps[ 'level1' ][ $currentAsserter ][ 'level2' ][ $currentMethod ][ 'content' ] .= $previousLine . PHP_EOL;
				}
			}
		}

		$previousLine = $line;
	}

	if (null !== $currentAsserter && null !== $currentMethod)
	{
		$helps[ 'level1' ][ $currentAsserter ][ 'level2' ][ $currentMethod ][ 'content' ] .= $previousLine . PHP_EOL;
	}

	foreach ($helps[ 'level1' ] as $asserter => $methods)
	{

		$explodedHelpLv1Content = explode(PHP_EOL, $methods[ 'content' ]);
		$explodedHelpLv1Content = ltrimArray($explodedHelpLv1Content);
		$explodedHelpLv1Content = rtrimArray($explodedHelpLv1Content);
		$helps[ 'level1' ][ $asserter ][ 'content' ] = implode(PHP_EOL, $explodedHelpLv1Content);

		foreach ($methods[ 'level2' ] as $methodName => $help)
		{
			$explodedHelp = explode(PHP_EOL, $help[ 'content' ]);
			$explodedHelp = ltrimArray($explodedHelp);
			$explodedHelp = rtrimArray($explodedHelp);
			$helps[ 'level1' ][ $asserter ][ 'level2' ][ $methodName ][ 'content' ] = implode(PHP_EOL, $explodedHelp);
			if (isset($helps[ 'level1' ][ $asserter ][ 'level2' ][ $methodName ][ 'level3' ]))
			{
				foreach ($helps[ 'level1' ][ $asserter ][ 'level2' ][ $methodName ][ 'level3' ] as $level3Name => $helpLvl3)
				{
					$explodedHelp = explode(PHP_EOL, $helpLvl3[ 'content' ]);
					$explodedHelp = ltrimArray($explodedHelp);
					$explodedHelp = rtrimArray($explodedHelp);
					$helps[ 'level1' ][ $asserter ][ 'level2' ][ $methodName ][ 'level3' ][ $level3Name ][ 'content' ] = implode(PHP_EOL, $explodedHelp);
				}
			}
		}
	}

	return $helps;
}

function ltrimArray(array $array)
{
	$tmpArray = [];
	$isArrayBegin = true;
	foreach ($array as $line)
	{
		if ($isArrayBegin && (preg_match('/^[-~=]+$/', $line) || 0 === strlen(trim($line))))
		{
			continue;
		}
		$isArrayBegin = false;
		$tmpArray[] = $line;
	}

	return $tmpArray;
}

function rtrimArray(array $array)
{
	return array_reverse(ltrimArray(array_reverse($array)));
}

function getLevel2Content(array $helps, $level1Name, $level2Name)
{
	if (!isset($helps[ 'level1' ][ $level1Name ][ 'level2' ][ $level2Name ]))
	{
		throw new \RuntimeException(sprintf('Class : %s, Method %s. Documentation not found', $level1Name, $level2Name));
	}

	return $helps[ 'level1' ][ $level1Name ][ 'level2' ][ $level2Name ][ 'content' ];
}

function getMethodHelp(\ReflectionMethod $method, array $helps)
{
	$shortClassname = strtolower($method->getDeclaringClass()->getShortName());
	$methodName = strtolower($method->getName());

	return getLevel2Content($helps, $shortClassname, $methodName);
}

function getPropertyHelp(\ReflectionProperty $property, array $helps)
{
	$shortClassname = strtolower($property->getDeclaringClass()->getShortName());
	$methodName = strtolower($property->getName());

	return getLevel2Content($helps, $shortClassname, $methodName);
}

function getClassHelp(\ReflectionClass $class, array $helps)
{
	$shortClassname = strtolower($class->getShortName());

	if (!isset($helps[ 'level1' ][ $shortClassname ]))
	{
		throw new \RuntimeException(sprintf('Class : %s. Documentation not found', $shortClassname));
	}

	return $helps[ 'level1' ][ $shortClassname ][ 'content' ];
}

function applyMappings(array $helps)
{
	$helps[ 'level1' ][ 'phpstring' ] = $helps[ 'level1' ][ 'string' ];
	$helps[ 'level1' ][ 'phparray' ] = $helps[ 'level1' ][ 'array' ];
	$helps[ 'level1' ][ 'phpclass' ] = $helps[ 'level1' ][ 'class' ];
	$helps[ 'level1' ][ 'phpfloat' ] = $helps[ 'level1' ][ 'float' ];
	$helps[ 'level1' ][ 'adapter' ] = array_merge($helps[ 'level1' ][ 'mock' ][ 'level2' ][ 'call' ], $helps[ 'level1' ][ 'mock' ]);
	$helps[ 'level1' ][ 'adapter' ][ 'level2' ] = array_merge($helps[ 'level1' ][ 'adapter' ][ 'level2' ], $helps[ 'level1' ][ 'adapter' ][ 'level3' ]);
	unset($helps[ 'level1' ][ 'adapter' ][ 'level3' ]);
	$helps[ 'level1' ][ 'adapter' ][ 'level2' ][ 'once' ] = $helps[ 'level1' ][ 'adapter' ][ 'level2' ][ 'once/twice/thrice' ];
	$helps[ 'level1' ][ 'adapter' ][ 'level2' ][ 'twice' ] = $helps[ 'level1' ][ 'adapter' ][ 'level2' ][ 'once/twice/thrice' ];
	$helps[ 'level1' ][ 'adapter' ][ 'level2' ][ 'thrice' ] = $helps[ 'level1' ][ 'adapter' ][ 'level2' ][ 'once/twice/thrice' ];

	return $helps;
}

function replaceHelpDoc($docComment, $spacesCount, \closure $helpCallback)
{
	$docComment = explode(PHP_EOL, $docComment);
	$firstAnnotation = 0;

	foreach ($docComment as $k => $comment)
	{
		if (preg_match('/^\s+\*\s+@/', $comment) || (preg_match('/^\s+\*\//', $comment)))
		{
			$firstAnnotation = $k;

			break;
		}
	}

	try
	{
		$methodHelpLines = explode(PHP_EOL, $helpCallback());
		$methodHelpLines[] = '';
	}
	catch (\RuntimeException $e)
	{
		return implode(PHP_EOL, $docComment);
	}

	if (count($methodHelpLines) === 1 && $methodHelpLines[ 0 ] == '')
	{
		return implode(PHP_EOL, $docComment);
	}

	$methodHelp = '';
	foreach ($methodHelpLines as $methodHelpLine)
	{
		$methodHelpLine = preg_replace('/^.. (\w+)::/', '$1: ', $methodHelpLine);
		$methodHelpLine = preg_replace('/:ref:`(\w+) <.*?>`/', '$1', $methodHelpLine);

		if (preg_match('/^\s*..\s+[\w\-]+:/', $methodHelpLine))
		{
			continue;
		}

		if (preg_match('/^\s+\|\s/', $methodHelpLine))
		{
			$methodHelpLine = ltrim($methodHelpLine, ' |');
		}

		$methodHelp .= str_repeat(' ', $spacesCount) . '* ' . rtrim($methodHelpLine) . PHP_EOL;
	}

	$methodHelp = preg_replace('/(?:\s{' . $spacesCount . '}\*\s*\n)+/', str_repeat(' ', $spacesCount) . '*' . PHP_EOL, $methodHelp);
	$methodHelp = rtrim($methodHelp);

	$doc = '/**' . PHP_EOL;
	$doc .= $methodHelp;
	$doc .= $methodHelp !== '' ? PHP_EOL : '';
	$doc .= implode(PHP_EOL, array_slice($docComment, $firstAnnotation));

	return $doc;
}

function replaceInFile($file, $docComment, $newDocComment, $suffix)
{
	return file_put_contents(
		$file,
		preg_replace_callback(
			sprintf('/(%s)([\w\s]+%s)/msi', preg_quote($docComment, '/'), preg_quote($suffix, '/s')),
			function($matches) use ($newDocComment)
			{
				return $newDocComment . $matches[ 2 ];
			},
			file_get_contents($file)
		)
	);
}

function updateFile($file, $className, array $helps)
{
	$refectionClass = new \ReflectionClass($className);
	foreach ($refectionClass->getMethods() as $method)
	{
		if ($className != $method->getDeclaringClass()->getName())
		{
			continue;
		}

		if (strtolower($method->getName()) == 'isreferenceto')
		{
			continue;
		}

		$newDocComment = replaceHelpDoc(
			$method->getDocComment(),
			5,
			function() use ($helps, $method)
			{
				return getMethodHelp($method, $helps);
			}
		);

		replaceInFile($file, $method->getDocComment(), $newDocComment, 'function ' . $method->getName() . "(");
	}

	foreach ($refectionClass->getProperties() as $property)
	{
		if ($className != $property->getDeclaringClass()->getName())
		{
			continue;
		}

		$newPropertyDocComment = replaceHelpDoc(
			$property->getDocComment(),
			5,
			function() use ($helps, $property)
			{
				return getPropertyHelp($property, $helps);
			}
		);

		replaceInFile($file, $property->getDocComment(), $newPropertyDocComment, 'public $' . $property->getName() . ";");
	}

	if (false !== $refectionClass->getDocComment())
	{
		$newClassDocComment = replaceHelpDoc(
			$refectionClass->getDocComment(),
			1,
			function() use ($helps, $refectionClass)
			{
				return getClassHelp($refectionClass, $helps);
			}
		);
		replaceInFile($file, $refectionClass->getDocComment(), $newClassDocComment, $refectionClass->getShortName());
	}
}

function createNewStubClass($className, $namespace)
{
	$content = <<<EOF
<?php

namespace {$namespace};

use mageekguy\atoum;

class {$className} extends asserter
{
}

EOF;

	$path = __DIR__ . '/../classes/' . str_replace('\\', '/', $namespace) . '/' . $className . '.php';
	if (file_exists($path))
	{
		echo 'File already exist, so skipp overwriting it!', PHP_EOL;
		return $path;
	}

	file_put_contents($path, $content);
	return $path;
}
