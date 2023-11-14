<!-- Câu 1:Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
Câu 2:A
Câu 3:A
Câu 4:A
Câu 5:B -->

<!-- Bài 1 -->
<?php
function generateFibonacci($n) {
    $so = array(0, 1);
    for ($i = 2; $i < $n; $i++) {
        $so[$i] = $so[$i - 1] + $so[$i - 2];
    }
    return $so;
}

$n = 10;
$so = generateFibonacci($n);
echo "Dãy số Fibonacci đầu tiên có $n phần tử là: ";
for ($i = 0; $i < $n; $i++) {
    echo $so[$i] . ' ';
}
?>
<br>
<!-- Bài 2 -->
<?php
$hs = array(
    array('id' => 1, 'name' => 'Hảo', 'age' => 20, 'grade' => 6.0),
    array('id' => 2, 'name' => 'Hà', 'age' => 15, 'grade' => 7.0),
    array('id' => 3, 'name' => 'Hạnh', 'age' => 16, 'grade' => 7.0),
    array('id' => 4, 'name' => 'Hằng', 'age' => 17, 'grade' => 8.0),
    array('id' => 5, 'name' => 'Giang', 'age' => 18, 'grade' => 6.5)
);

echo "Thông tin của tất cả học sinh trong mảng là: <br>";
echo "<table style='border-collapse: collapse; width: 10%;'>";
echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Grade</th></tr>";

foreach ($hs as $student) {
    echo "<tr><td>" . $student['id'] . "</td><td>" . $student['name'] . "</td><td>" . $student['age'] . "</td><td>" . $student['grade'] . "</td></tr>";
}

echo "</table>";

function timDiemCaoNhat($hs) {
    $diemCaoNhat = 0;
    $hsDiemCaoNhat = null;

    foreach ($hs as $student) {
        if ($student['grade'] > $diemCaoNhat) {
            $diemCaoNhat = $student['grade'];
            $hsDiemCaoNhat = $student;
        }
    }

    return $hsDiemCaoNhat;
}

$hsDiemCaoNhat = timDiemCaoNhat($hs);
echo "<br>Học sinh có điểm cao nhất là: " . $hsDiemCaoNhat['name'] . " với điểm số là " . $hsDiemCaoNhat['grade'] . ".";
?>
