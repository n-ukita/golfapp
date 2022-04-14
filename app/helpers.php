<?php declare(strict_types=1);

if (! function_exists('record')) {
    /**
     * @return string
     */
    function record($num)
    {
        switch ($num) {
            case -2:
                $str = "◎";
                break;
            case -1:
                $str = "○";
                break;
            case 0:
                $str = "-";
                break;
            case 1:
                $str = "△";
                break;
            case 2:
                $str = "□";
                break;
            case 3:
                $str = "+3";
                break;
            case 4:
                $str = "+4";
                break;
            case 5:
                $str = "+5";
                break;
            case 6:
                $str = "+6";
                break;
            case 7:
                $str = "+7";
                break;
            case 8:
                $str = "+8";
                break;
            case 9:
                $str = "+9";
                break;         
            default:
                $str = $num;
        }
        return $str;
    }
}