<!-- 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. -->
<?php
function kiemTraChan($s)
{
    if ($s % 2 == 0) {
        echo "Số $s là số chẵn.";
    } else {
        echo "Số $s là số lẻ.";
    }
}
$so = 5; 
kiemTraChan($so);
?>
<br>
<?php
//2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function tinhTong($n)
{
    $tong = 0;
    
    for ($i = 1; $i <= $n; $i++) {
        $tong += $i;
    }

    return $tong;
}
$n = 10; 
$tong = tinhTong($n);

echo "Tổng của các số từ 1 đến $n là: $tong";
?>
<!-- 3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10 -->
<table border="1px">
    <tr>
        <?php for($i = 1; $i < 10; $i ++) { ?>
            <td>
                <?php for($j = 1; $j <= 10; $j ++) { ?>
                    <?php echo "$i x $j = " . ($i * $j); ?>
                    <br>
                <?php } ?>
            </td>
        <?php } ?>
    </tr>
</table>
<!-- 4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
function kiemTraChuoi($str, $word){
if (strpos($str, $word) !== false) {
    echo "Chuỗi '$str' chứa từ '$word'";
} else {
    echo "Chuỗi '$str' không chứa từ '$word'";
}
}
$chuoi = "do thi my hao"; 
$tu = "hao";
kiemTraChuoi($chuoi, $tu);
?>
<br>
<!--5.  Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
function timGiaTri($arr) {
    $max = max($arr);
    $min = min($arr);
    echo "Giá trị lớn nhất trong mảng là: $max <br>";
    echo "Giá trị nhỏ nhất trong mảng là: $min";
}

$arr = array(10, 23, 34, 45, 56);
timGiaTri($arr);
?>
<br>
<!-- 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
$arr = array(3, 2, 10, 15, 4);
sort($arr);

echo "Mảng sau khi sắp xếp theo thứ tự tăng dần: <br>";
foreach ($arr as $kq) {
    echo "$kq <br>";
}
?>
<br>
<!-- 7.Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
function factorial($num) {
    if($num == 0) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}
$num = 3;
$fact = factorial($num);
echo "Giai thừa của $num là $fact";
?>
<br>
<!-- 8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
function kiemTraSoNguyenTo($n)
{
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

function timSoNguyenTo($batDau, $ketThuc)
{
    echo "Các số nguyên tố trong khoảng từ $batDau đến $ketThuc là: ";

    for ($i = $batDau; $i <= $ketThuc; $i++) {
        if (kiemTraSoNguyenTo($i)) {
            echo "$i ";
        }
    }
}
$batDau = 1;
$ketThuc = 200; 
timSoNguyenTo($batDau, $ketThuc);
?>
<br>
<!-- 9.Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php
$numbers = array(1, 2, 3, 4, 5);
$sum = array_sum($numbers);
echo "Tổng của các số trong mảng là: " . $sum;
?>
<br>
<!-- 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
function fibonacci($n) {
    $fib = array(0, 1);
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

$start = 1;
$end = 50;
$fib = fibonacci($end);

echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
foreach ($fib as $f) {
    if ($f >= $start && $f <= $end) {
        echo "$f ";
    }
}
?>
<br>
<!--11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
function laSoArmstrong($n) {
    $tong = 0;
    $num_digits = strlen((string)$n);
    $t = $n;
    while ($t > 0) {
        $digit = $t % 10;
        $tong += pow($digit, $num_digits);
        $t = (int)($t / 10);
    }
    return $tong == $n;
}

$num = 2000;
if (laSoArmstrong($num)) {
    echo "$num là số Armstrong";
} else {
    echo "$num không phải là số Armstrong";
}
?>
<br>
<!-- 12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
$array = array('do', 'thi', 'hao');
$element = 'my';
$position = 2;
array_splice($array, $position, 0, $element);
print_r($array);
?>
<br>
<!--13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
    $arr = array(1, 20, 20, 13, 4, 4, 5);
    $unique_arr = array_unique($arr);
    print_r($unique_arr);
?>
<br>
<!-- 14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
    $arr = array(1, 2, 2, 3, 4, 4, 5);
    $phanTuCanTim = 4;
    $index = array_search($phanTuCanTim, $arr);
    if ($index !== false) {
        echo "Tìm thấy phần tử $phanTuCanTim tại chỉ số $index";
    } else {
        echo "Không tìm thấy phần tử $phanTuCanTim trong mảng";
    }
?>
<br>
<!--15. Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
    $str = "Hello world";
    $chuoiDao = strrev($str);
    echo $chuoiDao;
?>
<br>
<!-- 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
 $string = "do thi my hao";
 $wordCount = str_word_count($string);
 echo "Số từ trong chuỗi là: $wordCount";
 ?>
 <br>
 <!-- 18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
 <?php
    $arr = array(1, 2, 2, 3, 4, 4, 5);
    $count = array_count_values($arr);
    print_r($count);
?>
<br>
<!-- 19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
    $arr = array(1, 2, 2, 3, 4, 4, 5);
    rsort($arr);
    print_r($arr);
?>
<br>
<!-- 20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng -->
<?php
$arr = array(2, 3, 4);
array_unshift($arr, 1);//them phan tu 1 vao dau mang
print_r($arr);
array_push($arr, 5);//them phan tu 5 vao cuoi mang
print_r($arr); 
?>
<br>
<!-- 21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
$arr = array(12, 3, 14, 5, 16);
rsort($arr);
echo "Số lớn thứ hai trong mảng là: " . $arr[1]; 
?>
<br>
<!-- 22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php

function UCLN($a, $b) {
    if ($b == 0) {
        return $a;
    } else {
        return UCLN($b, $a % $b);
    }
}

function BSCNN($a, $b) {
    return ($a * $b) / UCLN($a, $b);
}
$a=10;
$b=12;
echo "Ước số chung lớn nhất của $a và $b là: " . UCLN($a, $b) . "<br>";
echo "Bội số chung nhỏ nhất của $a và $b là: " . BSCNN($a, $b);
?>
<br>
<!-- 23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
function find_perfect_num($n) {
    $sum = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $n) {
        return true;
    } else {
        return false;
    }
}

$n=10;
if (find_perfect_num($n)) {
    echo "$n là số hoàn hảo";
} else {
    echo "$n không phải là số hoàn hảo";
}
?>
<br>
<!-- 24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
$arr = [2, 3, 4, 5, 6];
$soLeLonNhat = max(array_filter($arr, function($x) { return $x % 2 == 1; }));
echo "Số lẻ lớn nhất trong mảng là: " . $soLeLonNhat; 
?>
<br>
<!-- 25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
function laSoNguyenTo($n)
{
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}
$soCanKiemTra = 5;
if (laSoNguyenTo($soCanKiemTra)) {
    echo "$soCanKiemTra là số nguyên tố.";
} else {
    echo "$soCanKiemTra không phải là số nguyên tố.";
}
?>
<br>
<!-- 26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
function timSoDuongLonNhat($arr) {
    $max = 0;
    foreach($arr as $num) {
        if($num > $max && $num > 0) {
            $max = $num;
        }
    }
    return $max;
}
$array=[1,5,6,4,7,8];
echo "Số dương lớn nhất trong mảng là: " . (timSoDuongLonNhat($array) ?? "Không có số dương trong mảng");
?>
<br>
<!--27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
function timSoAmLonNhat($arr) {
    $max = null;
    foreach($arr as $num) {
        if($num < 0 && ($max == null || $num > $max)) {
            $max = $num;
        }
    }
    return $max;
}
$array=[-1,-5,-6,-4,-7,-8];
echo "Số âm lớn nhất trong mảng là: " . (timSoAmLonNhat($array) ?? "Không có số âm trong mảng");
?>
<br>
<!-- 28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->

<?php
function tongSoLe($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}
$n=10;
echo"Tổng số lẻ tử 1 đến $n là: ".(tongSoLe($n));
?>
<br>
<!-- 29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
function laSoChinhPhuong($n)
{
    return sqrt($n) == (int)sqrt($n);
}

function timSoChinhPhuongTrongKhoang($batDau, $ketThuc)
{
    $soChinhPhuong = [];

    for ($i = $batDau; $i <= $ketThuc; $i++) {
        if (laSoChinhPhuong($i)) {
            $soChinhPhuong[] = $i;
        }
    }

    return $soChinhPhuong;
}

$batDau = 1;
$ketThuc = 100; 
$ketQua = timSoChinhPhuongTrongKhoang($batDau, $ketThuc);
echo "Các số chính phương từ $batDau đến $ketThuc là: " . implode(', ', $ketQua);
?>
<br>
<!-- 30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
$str = "do thi my hao";
$sub = "my";
if (strpos($str, $sub) !== false) {
    echo "Chuỗi '$sub' là chuỗi con của chuỗi '$str'";
} else {
    echo "Chuỗi '$sub' không phải là chuỗi con của chuỗi '$str'";
}
?>


























