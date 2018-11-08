# Hack

Credits: [Hack Tutorial](http://hacklang.org/tutorial.html)

Hack files start with the following for [partial mode](https://docs.hhvm.com/hack/typechecker/modes#partial-mode):

```
<?hh
```

For [strict mode](https://docs.hhvm.com/hack/typechecker/modes#strict-mode):

```
<?hh // strict
```

Hack supports typing for function arguments and return values:

```
<?hh

function increment(int $number): int {
  return $number+1;
}
```
