<!DOCTYPE html>
<html>
    <title>Samværskalenderen</title>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/css/w3css/w3.css">
<style>
    .center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>
    </head>

    <body>
        <?php
function e($el, $id, $x, $y, $width, $height, $fontsize, $borderthickness, $borderstyle, $text, $verticalallign, $onclick, $oninput)
{
    $str_aa = '';
    $str_ab = '';
    switch ($el) {
        case 'l':
        case 'label':
            $str_aa = '<div style="' .
                'box-sizing: border-box; ' .
                'position: absolute; ' .
                'overflow: hidden; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'font-size: ' . $fontsize . 'px; ' .
                'border: ' . $borderthickness . 'px ' . $borderstyle . ';">';
            $str_ab = '</div>';
            break;
        case 'b':
        case 'button':
            $str_aa = '<div style="' .
                'box-sizing: border-box; ' .
                'position: absolute; ' .
                'overflow: hidden; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'font-size: ' . $fontsize . 'px; ' .
                'border: ' . $borderthickness . 'px ' . $borderstyle . '; ' .
                'cursor: pointer;"' .
                'onclick="' . $onclick . '">';
            $str_ab = '</div>';
            break;
        case 'bround':
            $str_aa = '<div style="' .
                'box-sizing: border-box; ' .
                'border-radius: 3px;' .
                'position: absolute; ' .
                'overflow: hidden; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'font-size: ' . $fontsize . 'px; ' .
                'border: 2px solid black; ' .
                'cursor: pointer;"' .
                'id="' . $id . '" ' .
                'onclick="' . $onclick . '">';
            $str_ab = '</div>';
            break;
        case 'bround_year':
            $str_aa = '<div style="' .
                'box-sizing: border-box; ' .
                'border-radius: 3px;' .
                'position: absolute; ' .
                'overflow: hidden; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'font-size: ' . $fontsize . 'px; ' .
                'border: 2px solid black; ' .
                'cursor: pointer;"' .
                'onclick="' . $onclick . '">';
            $str_ab = '</div>';
            break;
        case 'bday':
            $timestamp = explode('-', $id);
            $str_aa = '<div style="' .
                'box-sizing: border-box; ' .
                'border-radius: 2px;' .
                'position: absolute; ' .
                'overflow: hidden; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'font-size: ' . $fontsize . 'px; ' .
                'border: ' . $borderthickness . 'px ' . $borderstyle . '; ' .
                'cursor: pointer;"' .
                'id="' . $id . '" ' .
                'year="' . $timestamp[1] . '" ' .
                'month="' . $timestamp[2] . '" ' .
                'day="' . $timestamp[3] . '" ' .
                'week="' . $timestamp[4] . '" ' .
                'dayofweek="' . $timestamp[5] . '" ' .
                'onclick="' . $onclick . '">';
            $str_ab = '</div>';
            break;
        case 'i':
        case 'input':
            $str_aa = '<input type="text" id="' . $id .
                '" oninput="' . $oninput .
                '" onclick="' . $onclick . '" ' .
                'style="position: absolute; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'font-size: ' . $fontsize . 'px; ' .
                'border: ' . $borderthickness . 'px ' . $borderstyle . '; ' .
                'cursor: pointer;" ' .
                'value="' . $text . '">';
            $str_ab = '';
            break;
    }

    switch ($verticalallign) {
        case 'c':
        case 'center':
            echo $str_aa .
                '<span style="' .
                'margin: 0; ' .
                'position: absolute; ' .
                'top: 50%; ' .
                'left: 50%; ' .
                'margin-right: -50%;' .
                'transform: translate(-50%, -50%); ' .
                'text-align: center; ">' .
                $text .
                '</span>' .
                $str_ab;
            break;
        case '%':
            echo $str_aa . $str_ab;
            break;
        default:
            echo $str_aa . $text . $str_ab;
            break;
    }
}

$y = $_GET['year'];
if (($y < 2008) || ($y > 2050)) {
    $y = intval(date('Y'));
}

///////////////////////////////////////////////////////
// Render top line: year / dad/ mum / name / functions
///////////////////////////////////////////////////////

$xpos = 2;
e('bround', 'previous-year', $xpos, 5, 32, 32, 29, 0, '', '&#10094;', 'c', 'setyear(' . ($y - 1) . ')', '');
$xpos += 35;
e('l', '', $xpos, 5, 90, 32, 29, 0, '', $y, 'c', '', '');
$xpos += 92;
e('bround', 'next-year', $xpos, 5, 32, 32, 29, 0, '', '&#10095;', 'c', 'setyear(' . ($y + 1) . ')', '');
$xpos += 65;
e('bround', 'calendar-1', $xpos, 5, 150, 32, 20, 1, 'solid black', 'Hos far', 'c', '', '');
$xpos += 160;
e('bround', 'calendar-2', $xpos, 5, 150, 32, 20, 1, 'solid black', 'Hos mor', 'c', '', '');

$xpos += 180;
//e('bround', 'child-2', $xpos, 5, 120, 32, 20, 1, 'solid black', 'Ellen', 'c', 'setchild(this)', '');
//$xpos += 130;
e('bround', 'child-1', $xpos, 5, 120, 32, 20, 1, 'solid black', 'CM', 'c', 'setchild(this)', '');
//$xpos += 130;
//e('bround', 'child-3', $xpos, 5, 120, 32, 20, 1, 'solid black', 'Artur', 'c', 'setchild(this)', '');

$m = $_GET['month'];
if (($m < 1) || ($m > 12)) {
    $m = intval(date('m'));
}

///////////////////////////////////////////////////////
// Render the calendar
///////////////////////////////////////////////////////

echo '<div id="view-one" style="display: none;">';

for ($m = 1; $m < 13; $m++) {

    $kd = array("mon", "tue", "wed", "thu", "fri", "sat", "sun");
    $kd1 = array("m", "t", "w", "t", "f", "s", "s");
    $kd2 = array("monday", "tuesday", "wedensday", "thursday", "friday", "saturday", "sunday");

    $hw = 60;
    $xoff = 285 * (($m - 1) % 4);
    $yoff = 40 + 270 * floor(($m - 1) / 4);

// render month
    $id = 'timestamp-' . $y . '-' . $m . '-' . 0 . '-' . 0 . '-' . 0;
    e('bday', $id, $xoff, 20 + $yoff, 300, 32, 20, 1, '', date('F', mktime(0, 0, 0, $m, 1, $y)), 'c', 'togglemonth(this)', '');

// rendering daynames
    for ($dd = 1; $dd < 8; $dd++) {
        $ypos = 50;
        $xpos = 2 + $dd * 33;
        $id = 'timestamp-' . $y . '-' . $m . '-' . 0 . '-' . 0 . '-' . $dd;
        e('bday', $id, $xpos + $xoff, $ypos + $yoff, 32, 32, 10, 1, 'solid black', $kd[$dd - 1], 'c', 'toggledayofweek(this)', '');
    }

// rendering small calendar
    $ypos = 85;
    $ypos2 = 50;
    $weekchange = true;
    for ($dd = 1; $dd < intval(date('t', mktime(0, 0, 0, $m, 1, $y))) + 1; $dd++) {
        $sd = intval(date('N', mktime(0, 0, 0, $m, $dd, $y)));
        if ($weekchange) {
            $id = 'timestamp-' . $y . '-' . 0 . '-' . 0 . '-' . intval(date('W', mktime(0, 0, 0, $m, $dd, $y))) . '-' . 0;
            e('bday', $id, 2 + $xoff, $ypos + $yoff, 32, 31, 18, 1, 'solid black', intval(date('W', mktime(0, 0, 0, $m, $dd, $y))), 'c', 'toggleweek(this)', '');
        }
        $id = 'timestamp-' . $y . '-' . $m . '-' . $dd . '-' . intval(date('W', mktime(0, 0, 0, $m, $dd, $y))) . '-' . $sd;
        $xpos = 2 + $sd * 33;
        e('bday', $id, $xpos + $xoff, $ypos + $yoff, 32, 31, 10, 1, 'solid black', $dd, 'c', 'toggleday(this)', '');

        if ($sd == 7) {
            $ypos += 33;
            $ypos2 += ($hw + 1) * 3;
        }
    }
}

echo '</div>';

// input field
//e('i', 'thomas', 12, 308, 277, 32, 18, 1, 'solid black', '', '%', '', '');

// fonsize
/*
echo '<div id="fss">';
$y = 5;
for ($n = 10; $n < 39; $n += 2) {
e('b', '', 310, $y, 60, 60, $n, 1, 'solid black', 'Size', 'c', '', '');
$y += 65;
}
echo '</div>';
 */
?>

<script src="/js/samverskalenderen.js"></script>

    </body>

</html>