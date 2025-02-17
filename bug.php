function foo(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$arr = [1, 2, 3];
foo($arr);
print_r($arr); // Output: [2, 3, 4]

function bar(array $arr) {
  foreach ($arr as $key => $value) {
    $arr[$key]++;
  }
}

$arr = [1, 2, 3];
bar($arr);
print_r($arr); // Output: [2, 3, 4]