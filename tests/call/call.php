<?php
func();
func($a, $b, $c);
func(...$a);
func($a, ...$b);
$foo->func();
func( $arg1,$arg2 ,$arg3, $arg4 , $arg5 );
$foo -> bar ( $arg1,$arg2 ,$arg3, $arg4 , $arg5 ) ;
Foo :: bar( $arg1,$arg2 ,$arg3, $arg4 , $arg5 ) ;

$db->Execute($sql, [
    $foo,
    $bar,
    $foobar,
    $somewhatLongParameter,
    $somewhatLongParameterX,
    $somewhatLongParameterXYZ
]);

$db->Execute([
    $foo,
    $bar,
    $foobar,
    $somewhatLongParameter,
    $somewhatLongParameterX,
    $somewhatLongParameterXYZ
], $sql);

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
});

$this->something->method($argument, $this->more->stuff(
    $this->even->more->things->complicatedMethod()
));

$this->something->method(
    $this->more->stuff($this->even->more->things->complicatedMethod()),
    $argument
);

$this->something->method(
    $argument,
    $otherArgument,
    array("foo" => "bar", "baz" => "buzz"),
    $this->even->more->things->complicatedMethod()
);

$this->files->put(
    $path, $this->expiration($minutes).serialize($value), true
);

tap(((int) $raw['data']) + $value, function ($newValue) use ($key, $raw) {
    $this->put($key, $newValue, $raw['time']);
});

$expire = substr(
    $contents = $this->files->get($path, true), 0, 10
);
$this->app->singleton('session', function ($app) {
    return new SessionManager($app);
});

$this->filter([
    new MergeValue(['First', 'Second']),
    'Taylor',
    'Mohamed',
    $this->mergeWhen(false, ['Adam', 'Matt']),
    'Jeffrey',
    new MergeValue(['Abigail', 'Lydia']),
]);

$this->assertEquals([
    'First', 'Second', 'Taylor', 'Mohamed', 'Jeffrey', 'Abigail', 'Lydia',
], $results);

$this->assertEquals(['First'], $results);

$some->other->thing(array(
    'foo' => 'bar',
    'buzz' => $this->is->nested(array(
        'complex' => 'stuff',
        'foo' => 'bar',
        'buzz' => 'bazz'
    ))
));

$some->other->thing(array(
    'foo' => 'bar',
    'buzz' => $this->is->nested(array(12, 34, 45, 67, 89))
), array(
    11323123,
    1231, 13231233243, 324234234
));

$foo->bar(
    $arg1,
    function ($arg2) use ($var1) {
        // body
    },
    $arg3
);

$packages = array_merge(
    idx($composer, 'require', []),
    idx($composer, 'require-dev', [])
);

if ($parity != array_reduce($r,function ($acc, $tmp) {return $acc ^ $tmp;},0)) {
    return [];
}

implode(
    ', ',
    array_map(
        function ($f) {
            return $f;
        },
        array_merge($arr1, $arr2, $arr3)
    )
);

call(function() {
    return thing();
}, 1 ? 2 : 3);

call(function() {
    return thing();
}, something() ? someOtherThing() : somethingElse(true, 0));

call(function() {
    return thing();
}, something($longArgumentName, $anotherLongArgumentName) ? someOtherThing() : somethingElse(true, 0));

call(function() {
    return thing();
}, something($longArgumentName, $anotherLongArgumentName, $anotherLongArgumentName, $anotherLongArgumentName) ? someOtherThing() : somethingElse(true, 0));

array_map(function ($aligment) {
    return 'row-' . $aligment . '-xs';
}, is_array($attributes['alignment'])
    ? $attributes['alignment']
    : explode(' ', $attributes['alignment'])
);
