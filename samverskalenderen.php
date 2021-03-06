<!DOCTYPE html>
<html>
    <title>Samværskalenderen</title>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
    html,body{font-family:Verdana,sans-serif;font-size:15px;line-height:1.5}
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
        case 'ltop':
            $str_aa = '<div style="' .
                'box-sizing: border-box; ' .
                'position: absolute; ' .
                'overflow: hidden; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'border-right: 2px solid black; ' .
                'border-bottom: 2px solid black;">';
            $str_ab = '</div>';
            break;
        case 'lnumbers':
            $str_aa = '<div style="' .
                'box-sizing: border-box; ' .
                'position: absolute; ' .
                'overflow: hidden; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'font-size: ' . $fontsize . 'px; ' .
                'border-bottom: 1px solid black; ' .
                'border-right: 1px solid black; ' .
                'border-left: 1px solid black;"><b>';
            $str_ab = '</b></div>';
            break;
        case 'ldaynames-box':
            $str_aa = '<div style="' .
                'box-sizing: border-box; ' .
                'position: absolute; ' .
                'overflow: hidden; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'border-bottom: 1px solid black; ' .
                'border-right: 1px solid black;">';
            $str_ab = '</div>';
            break;
        case 'select-year-button':
            $str_aa = '<div style="' .
                'box-sizing: border-box; ' .
                'position: absolute; ' .
                'overflow: hidden; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'font-size: ' . $fontsize . 'px; ' .
                'border: 1px solid black;' .
                'cursor: pointer;"' .
                'id="' . $id . '" ' .
                'onclick="' . $onclick . '">';
            $str_ab = '</div>';
            break;
        case 'month-button':
            $str_aa = '<div style="' .
                'box-sizing: border-box; ' .
                'position: absolute; ' .
                'overflow: hidden; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'font-size: ' . $fontsize . 'px; ' .
                'border-top: 2px solid black;' .
                'border-bottom: 2px solid black;' .
                'border-right: 2px solid black;' .
                'cursor: pointer;"' .
                'onclick="' . $onclick . '">';
            $str_ab = '</div>';
            break;

// legacy stuff
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
                'border: 1px solid black;' .
                'cursor: pointer;"' .
                'onclick="' . $onclick . '">';
            $str_ab = '</div>';
            break;
        case 'mb-jan':
            $str_aa = '<div style="' .
                'box-sizing: border-box; ' .
                'position: absolute; ' .
                'overflow: hidden; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'font-size: ' . $fontsize . 'px; ' .
                'border: 2px solid black;' .
                'cursor: pointer;"' .
                'onclick="' . $onclick . '">';
            $str_ab = '</div>';
            break;
        case 'md-select':
            $str_aa = '<div style="' .
                'box-sizing: border-box; ' .
                'position: absolute; ' .
                'overflow: hidden; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'font-size: ' . $fontsize . 'px; ' .
                'border-bottom: 1px solid black;' .
                'border-right: 1px solid black;' .
                'cursor: pointer;"' .
                'onclick="' . $onclick . '">';
            $str_ab = '</div>';
            break;
        case 'md-select-jan':
            $str_aa = '<div style="' .
                'box-sizing: border-box; ' .
                'position: absolute; ' .
                'overflow: hidden; ' .
                'left: ' . $x . 'px; ' .
                'top: ' . $y . 'px; ' .
                'width: ' . $width . 'px; ' .
                'height: ' . $height . 'px; ' .
                'font-size: ' . $fontsize . 'px; ' .
                'border-bottom: 1px solid black;' .
                'border-right: 1px solid black;' .
                'border-left: 1px solid black;' .
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
                'border: 1px solid black; ' .
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
                'sel="' . $timestamp[6] . '" ' .
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

$ypos = 115;
$xpos = 40;
e('l', '', $xpos, 5, 185 * 5, 100, 84, 0, '', 'Samværskalenderen', '', '', '');
e('select-year-button', 'year-1', $xpos, $ypos, 180, 60, 50, 1, '', $y - 2, 'c', 'select_year(this)', '');
$xpos += 185;
e('select-year-button', 'year-2', $xpos, $ypos, 180, 60, 50, 1, '', $y - 1, 'c', 'select_year(this)', '');
$xpos += 185;
e('select-year-button', 'year-3', $xpos, $ypos, 180, 60, 50, 4, '', $y, 'c', 'select_year(this)', '');
$xpos += 185;
e('select-year-button', 'year-4', $xpos, $ypos, 180, 60, 50, 1, '', $y + 1, 'c', 'select_year(this)', '');
$xpos += 185;
e('select-year-button', 'year-5', $xpos, $ypos, 180, 60, 50, 1, '', $y + 2, 'c', 'select_year(this)', '');
$xpos += 185;
//e('bround', 'next-year', $xpos, 5, 60, 60, 50, 0, '', '&#10095;', 'c', 'setyear(' . ($y + 1) . ')', '');
$xpos += 65;
e('bround', 'calendar-1', $xpos, 5, 150, 32, 20, 1, 'solid black', 'Hos far', 'c', '', '');
$xpos += 160;
e('bround', 'calendar-2', $xpos, 5, 150, 32, 20, 1, 'solid black', 'Hos mor', 'c', '', '');

$xpos += 180;
//e('bround', 'child-2', $xpos, 5, 120, 32, 20, 1, 'solid black', 'Ellen', 'c', 'setchild(this)', '');
//$xpos += 130;
e('bround', 'child-1', $xpos, 5, 120, 32, 20, 1, 'solid black', 'CM', 'c', 'setchild(this)', '');
$xpos += 130;
//e('bround', 'child-3', $xpos, 5, 120, 32, 20, 1, 'solid black', 'Artur', 'c', 'setchild(this)', '');
e('b', '', $xpos, 5, 32, 32, 20, 1, '', '<i class="w3-bar-item w3-button w3-right fa fa-cog fa-1x" aria-hidden="true"></i>', 'c', 'setchild(this)', '');
$xpos += 35;
e('b', '', $xpos, 5, 32, 32, 20, 1, '', '<i class="w3-bar-item w3-button w3-right fa fa-magic fa-1x" aria-hidden="true"></i>', 'c', 'setchild(this)', '');
$xpos += 35;
e('b', '', $xpos, 5, 32, 32, 20, 1, '', '<i class="w3-bar-item w3-button w3-right fa fa-user fa-1x" aria-hidden="true"></i>', 'c', 'setchild(this)', '');

$m = $_GET['month'];
if (($m < 1) || ($m > 12)) {
    $m = intval(date('m'));
}

///////////////////////////////////////////////////////
// Render the calendar view-one
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
    e('b', $id, $xoff, 20 + $yoff, 300, 32, 20, 1, '', date('F', mktime(0, 0, 0, $m, 1, $y)), 'c', 'togglemonth(this)', '');

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
            $weeknum = intval(date('W', mktime(0, 0, 0, $m, $dd, $y)));
            $id = 'timestamp-' . $y . '-' . 0 . '-' . 0 . '-' . $weeknum . '-' . 0;
            e('bday', $id, 2 + $xoff, $ypos + $yoff, 32, 31, 10, 1, 'solid black', $weeknum, 'c', 'toggleweek(this)', '');
        }
        $id = 'timestamp-' . $y . '-' . $m . '-' . $dd . '-' . intval(date('W', mktime(0, 0, 0, $m, $dd, $y))) . '-' . $sd;
        $xpos = 2 + $sd * 33;
        e('bday', $id, $xpos + $xoff, $ypos + $yoff, 32, 31, 14, 1, 'solid black', $dd, 'c', 'toggleday(this)', '');

        if ($sd == 7) {
            $ypos += 33;
            $ypos2 += ($hw + 1) * 3;
        }
    }
}

echo '</div>';

///////////////////////////////////////////////////////
// Render the calendar view-two
///////////////////////////////////////////////////////

echo '<div id="view-two" style="display: inline;">';

// render day numbers
$xoff = 10;
$dx = 60;
$dy = 60;
$yoff = 3 * 60;

$xpos = $xoff;
$ypos = $yoff;
e('ltop', '', $xpos, $ypos, $dx / 2, $dy, 14, 0, '', '', '', '', '');
for ($dd = 1; $dd <= 31; $dd++) {
    $ypos = $yoff + $dy + ($dd - 1) * $dy;
    e('lnumbers', '', $xpos, $ypos, $dx / 2, $dy, 14, 0, '', $dd, 'c', '', '');
}

// render big calendar
for ($m = 1; $m < 13; $m++) {

    $kd1 = array("mon", "tue", "wed", "thu", "fri", "sat", "sun");
    $kd = array("m", "t", "w", "t", "f", "s", "s");
    $kd2 = array("monday", "tuesday", "wedensday", "thursday", "friday", "saturday", "sunday");

    $hw = 60;
    $xoff = 40 + 4.5 * 60 * ($m - 1);
    $yoff = 3 * 60;

// render month
    $id = 'timestamp-' . $y . '-' . $m . '-' . 0 . '-' . 0 . '-' . 0;
    e('month-button', $id, $xoff, $yoff, $dx * 4.5, $dy, 30, 1, 'solid black', date('F', mktime(0, 0, 0, $m, 1, $y)), 'c', 'togglemonth(this)', '');

// render days
    $weekchange = true;
    for ($dd = 1; $dd < intval(date('t', mktime(0, 0, 0, $m, 1, $y))) + 1; $dd++) {
        $sd = intval(date('N', mktime(0, 0, 0, $m, $dd, $y)));
        // if ($weekchange) {
        //     $weeknum = intval(date('W', mktime(0, 0, 0, $m, $dd, $y)));
        //     $id = 'timestamp-' . $y . '-' . 0 . '-' . 0 . '-' . $weeknum . '-' . 0;
        //     e('bday', $id, 2 + $xoff, $ypos + $yoff, 32, 31, 10, 1, 'solid black', $weeknum, 'c', 'toggleweek(this)', '');
        // }
        $xpos = $xoff;
        $ypos = $yoff + $dy + ($dd - 1) * $dy;
        //e('l', '', $xpos + $xoff, $ypos + $yoff + $dy / 2, 3 * $dx / 5, $dy / 2, 14, 0, 'solid black', $dd, 'c', '', '');
        e('ldaynames-box', '', $xpos, $ypos, $dx / 2, $dy, 0, 0, '', '', '', '', '');
        e('l', '', $xpos, $ypos + $dy / 2, $dx / 2, $dy / 2, 12, 0, 'solid black', $kd[$sd - 1], 'c', '', '');

        for ($aa = 0; $aa < 4; $aa++) {
            $id = 'time-' . $y . '-' . $m . '-' . $dd . '-' . intval(date('W', mktime(0, 0, 0, $m, $dd, $y))) . '-' . $sd . '-' . $aa;
            $xpos = $xoff + $dx * $aa + $dx / 2;
            e('md-select', $id, $xpos, $ypos, $dx, $dy, 10, 0, '', '', '', 'toggleday(this)', '');
            if (($m == 1) && ($aa == 0)) {
                //e('md-select-jan', $id, $xpos + $xoff, $ypos + $yoff, $dx / 2, $dy, 10, 1, 'solid black', '', 'c', 'toggleday(this)', '');
            } else {
                //e('md-select', $id, $xpos + $xoff, $ypos + $yoff, $dx, $dy, 10, 1, 'solid black', '', 'c', 'toggleday(this)', '');
            }
//        e('bday', $id, $xpos + $xoff, $ypos + $yoff, 61, 23, 10, 1, 'solid black', '', 'c', 'toggleday(this)', '');
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