<?php
new Foo;
new Foo();
$a = new Foo;
$b = new Foo();
$c = new Foo([1, 2, 3], "foo", $variable);
$bar = 'MyClassName';
$foo = new $bar;
$foo = new $bar();

abstract class A
{
    public static function create()
    {
        $a = new static;
        $b = new static();
    }

}

$class = (new Foo)->veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongMethod();
$class = (new Foo(['VeryVeryVeryVeryVeryVeryVeryVeryVeryLongKey' => 'VeryVeryVeryVeryVeryVeryVeryVeryVeryLongValue']))->veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongMethod();
$class = (new PendingDispatch(new $this->class(...func_get_args())))->chain($this->chain);
$dumper = in_array(PHP_SAPI, ['cli', 'phpdbg']) ? new CliDumper : new HtmlDumper;
$class = new static('Error encoding model ['.get_class($model).'] with ID ['.$model->getKey().'] to JSON: '.$message);
$response = new \Illuminate\Http\JsonResponse(new JsonResponseTestJsonSerializeObject);
$result = (new Pipeline(new \Illuminate\Container\Container))
    ->send('foo')
    ->through([new PipelineTestPipeOne])
    ->then(function ($piped) {
        return $piped;
    });
