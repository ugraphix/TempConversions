<?php/*
// http://home.circlemud.org/~geder/school/ITC250/project1/temp.php

//Celsius to Fahrenheit ° F = 9/5 ( ° C) +
//Celsius to Kelvin K = ° C + 273
//Celsius to Rankine R = ° C * 1.8 + 491.67
//Celsius to Newton N = ° C * 0.33
//Celsius to Delisle D = ° (C * 1.5) - 100
//Celsius to Romer RO = ° (C * 21 / 40) + 7.5-
//Celsius to Reaumur RE = °C * 0.8

//Fahrenheit to Celsius ° C = 5/9 (° F - 3
//Fahrenheit to Kelvin ° K =
//Fahrenheit to Rankine ° RK = F + 459.67
//Fahrenheit to Newton ° N = (F - 32) * 0.18333
//Fahrenheit to Delisle ° D = (212 - F) * 5/6
//Fahrenheit to Romer ° R = (F - 32) * 7/31.5
//Fahrenheit to Reaumur ° RE = (F - 32)/2.25

//Kelvin to Celsius ° C = K - 273
//Kelvin to Fahrenheit ° F = 9/5 (K - 273.15)
//Kelvin to Rankine ° RK = K * 1.8
//Kelvin to Newton ° N = (K - 273.15) * 0.33
//Kelvin to Delisle ° D = (373.15 - K) * 3/2
//Kelvin to Romer ° RO = ((K - 273.15) * 0.525)) + 7.25
//Kelvin to Reaumur ° RE = (K - 273.15) * 0.8

//Rankine to Celsuis ° C = (RK - 491.67) * 1.8
//Rankine to Fahrenheit ° F = RK - 459.67
//Rankine to Kelvin ° K = RK / 1.8
//Rankine to Newton ° N = (RK - 491.67) * 11 / 60
//Rankine to Delisle ° D = (671.67 - RK) * 5 / 6
//Rankine to Romer ° RO = ((RK - 491.67) * 0.02967)) + 7.5
//Rankine to Reaumur ° RE = (RK - 491.67) / 2.25

//Newton to Celsuis ° C = N / 0.33
//Newton to Fahrenheit ° F = (60 * N / 11) + 32
//Newton to Kelvin ° K = (N / .33)  +273.15
//Newton to Rankine ° RK = N * 5.4545 + 491.67
//Newton to Delisle ° D = (N * 4.5455) - 100
//Newton to Romer ° RO = N * (35 / 22) + 7.5
//Newton to Reaumur ° RE = N * 80 / 33

//Delisle to Celsuis ° C = (100 - D) * 2  / 3
//Delisle to Fahrenheit ° F = (D + 100) * 1.2 + 32
//Delisle to Kelvin ° K = 37.15 - (D * 2 / 3)
//Delisle to Rankine ° RK = (671.67 - D) * 6 / 5
//Delisle to Newton ° N = (33 - D) * 11 / 50
//Delisle to Romer ° RO = (60 - D) * 7 / 20
//Delisle to Reaumur ° RE = (80 - D) * 8 / 15

//Romer to Celsuis ° C = (RO - 7.5 ) / 0.525
//Romer to Fahrenheit ° F = (RO - 7.5) * 24 / 39
//Romer to Kelvin ° K = (R - 7.5) * 40 / 294.15
//Romer to Kelvin ° K = 21/40 * (R - 273.15) + 7.5  I USED THIS ONE
//Romer to Rankine ° RK = ((RO - 7.5) * 24 / 7) + 491.67
//Romer to Newton ° N = (RO - 7.5) * 22 / 35
//Romer to Delisle ° D = (60 - RO) * 20 / 7
//Romer to Reaumur ° RE = (RO - 7.5) * 32 / 21

//Reaumur to Celsuis ° C = RE * 1.25
//Reaumur to Fahrenheit ° F = (RE * 2.25) + 32
//Reaumur to Kelvin ° K = (RE * 125) + 273.15
//Reaumur to Rankine ° RK = (RE * 2.25) +491.67
//Reaumur to Newton ° N = RE * 33 / 80
//Reaumur to Delisle ° D = (60 - RE) * 20 / 7
//Reaumur to Romer ° RO = (RE * 0.65625) + 7.5

//Fahrenheit to celsius
function fahrenheit_to_celsius($given_value)
{
	$celsius=5/9*($given_value-32);
	return number_format($celsius,2);
}
//Fahrenheit to kelvin
function fahrenheit_to_kelvin($given_value)
{
	$kelvin=$given_value+273.15;
	return number_format($kelvin,2);
}
//Fahrenheit to rankine
function fahrenheit_to_rankine($given_value)
{
    $rankine=$given_value+459.67;
    return number_format($rankine,2);
}
//Fahrenheit to newton
function fahrenheit_to_newton($given_value)
{   $newton=($given_value-32)*0.18333;
    return number_format($newton,2);
}
//Fahrenheit to delisle
function fahrenheit_to_delisle($given_value)
{
    $delisle=(212-$given_value)*5/6;
    return number_format($delisle,2);
}
//Fahrenheit to romer
function fahrenheit_to_romer($given_value)
{
    $romer=($given_value-32)*7/31.5;
    return number_format($romer,2);
}
//Fahrenheit to reaumur
function fahrenheit_to_reaumur($given_value)
{
    $reaumur=($given_value-32)/2.25;
    return number_format($reaumur,2);
}
//Celsius to fahrenheit
function celsius_to_fahrenheit($given_value)
{
	$fahrenheit=$given_value*9/5+32;
	return number_format($fahrenheit,2);
}
//Celsinumber_format($,2)us to kelvin
function celsius_to_kelvin($given_value)
{
	$kelvin=$given_value+273.15;
	return number_format($kelvin,2);
}
//Celsius to rankine
function celsius_to_rankine($given_value)
{
    $rankine=($given_value*1.8)+491.67;
    return number_format($rankine,2);
}
//Celsius to newton
function celsius_to_newton($given_value)
{
    $newton=$given_value*0.33;
    return number_format($newton,2);
}
//Celsius to delisle
function celsius_to_delisle($given_value)
{
    $delisle=($given_value*1.5)-100;
    return number_format($delisle,2);
}
//Celsius to romer
function celsius_to_romer($given_value)
{
    $romer=($given_value*21/40)+7.5;
    return number_format($romer,2);
}
//Celsius to reaumur
function celsius_to_reaumur($given_value)
{
    $reaumur=$given_value*0.8;
    return number_format($reaumur,2);
}
//Kelvin to fahrenheit
function kelvin_to_fahrenheit($given_value)
{
	$fahrenheit=9/5*($given_value-273.15)+32;
	return number_format($fahrenheit,2);
}
//Kelvin to celsius
function kelvin_to_celsius($given_value)
{
	$celsius=$given_value-273.15;
	return number_format($celsius,2);
}
//Kelvin to rankine
function kelvin_to_rankine($given_value)
{
    $rankine=$given_value*1.8;
    return number_format($rankine,2);
}
//Kelvin to newton
function kelvin_to_newton($given_value)
{
    $newton=($given_value-273.15)*0.33;
    return number_format($newton,2);
}
//Kelvin to delisle
function kelvin_to_delisle($given_value)
{
    $delisle=(373.15-$given_valueK)*3/2;
    return number_format($delisle,2);
}
//Kelvin to romer
function kelvin_to_romer($given_value)
{
    $romer=0.525*($given_value-273.15)+7.25;
    return number_format($romer,2);
}
//Kelvin to reaumur
function kelvin_to_reaumur($given_value)
{
    $reaumur=($given_value-273.15)*0.8;
    return number_format($reaumur,2);
}
//Rankine to fahrenheit
function rankine_to_fahrenheit($given_value)
{
    $fahrenheit=$given_value-459.67;
    return number_format($fahrenheit,2);
}
//Rankine to celsius
function rankine_to_celsius()
{
    $celsius=($given_value-491.67)*1.8;
    return number_format($celsius,2);
}
//Rankine to kelvin
function rankine_to_kelvin($given_value)
{
    $kelvin=$given_value/1.8;
    return number_format($kelvin,2);
}
//Rankine to newton
function rankine_to_newton($given_value)
{
    $newton=($given_value-491.67)*11/60;
    return number_format($newton,2);
}
//Rankine to delisle
function rankine_to_delisle($given_value)
{
    $delisle=(671.67-$given_value)*5/6;
    return number_format($delisle,2);
}
//Rankine to romer
function rankine_to_romer($given_value)
{
    $romer=0.02967*($given_value-491.67)+7.5;
    return number_format($romer,2);
}
//Rankine to reaumur
function rankine_to_reaumur($given_value)
{
    $reaumur=($given_value-32)/2.25;
    return number_format($reaumur,2);
}
// Newton to fahrenheit
function newton_to_fahrenheit($given_value)
{
    $fahrenheit=(60*$given_value/11)+32;
    return number_format($fahrenheit,2);
}
// Newton to celsius
function newton_to_celsius($given_value)
{
    $celsius=$given_value/0.33;
    return number_format($celsius,2);
}
// Newton to kelvin
function newton_to_kelvin($given_value)
{
    $kelvin=($given_value/0.33)+273.15;
    return number_format($kelvin,2);
}
// Newton to rankine
function newton_to_rankine($given_value)
{
    $rankine=$given_value*5.4545+491.67;
    return number_format($rankine,2);
}
// Newton to delisle
function newton_to_delisle($given_value)
{
    $delisle=(373.15-$given_value)*3/2;
    return number_format($delisle,2);
}
// Newton to romer
function newton_to_romer($given_value)
{
    $romer=$given_value*(35/22)+7.5;
    return number_format($romer,2);
}
// Newton to reaumur
function newton_to_reaumur($given_value)
{
    $reaumur=($given_value-273.15)*0.8;
    return number_format($reaumur,2);
}
// Delisle to fahrenheit
function delisle_to_fahrenheit($given_value)
{
    $fahrenheit=($given_value+100)*1.2+32;
    return number_format($fahrenheit,2);
}
// Delisle to celsius
function delisle_to_celsius($given_value)
{
    $celsius=($given_value + 100)/1.5;
    return number_format($celsius,2);
}
// Delisle to kelvin
function delisle_to_kelvin($given_value)
{
    $kelvin=($given_value*125)+273.15;
    return number_format($kelvin,2);
}
// Delisle to rankine
function delisle_to_rankine($given_value)
{
    $rankine=(671.67-$given_value)*6/5;
    return number_format($rankine,2);
}
// Delisle to newton
function delisle_to_newton($given_value)
{
    $newton=(33-$given_value)*11/50;
    return number_format($newton,2);
}
// Delisle to romer
function delisle_to_romer($given_value)
{
    $romer=(60-$given_value)*7/20;
    return number_format($romer,2);
}
// Delisle to reaumur
function delisle_to_reaumur($given_value)
{
    $reaumur=(80-$given_value)*8/15;
    return number_format($reaumur,2);
}
// Romer to fahrenheit
function romer_to_fahrenheit($given_value)
{
    $fahrenheit=($given_value-75)*24/39;
    return number_format($fahrenheit,2);
}
// Romer to celsuis
function romer_to_celsius($given_value)
{
    $celsius=($given_value-7.5)/0.525;
    return number_format($celsius,2);
}
// Romer to kelvin
function romer_to_kelvin($given_value)
{
    $kelvin=21/40*($given_value-273.15)+7.15;
    //$kelvin=($given_value-7.5)*40/294.15;
    return number_format($kelvin,2);
}
// Romer to rankine
function romer_to_rankine($given_value)
{
    $rankine=24/7*($given_value - 7.5)+491.67;
    return number_format($rankine,2);
}
// Romer to newton
function romer_to_newton($given_value)
{
    $newton=($given_value-7.5)*22/35;
    return number_format($newton,2);
}
// Romer to delisle
function romer_to_delisle($given_value)
{
    $delisle=(60-$given_value)*20/7;
    return number_format($delisle,2);
}
// Romer to reaumur
function romer_to_reaumur($given_value)
{
    $reaumur=($given_value-7.5)*32/21;
    return number_format($reaumur,2);
}
// Reaumur to fahrenheit
function reaumur_to_fahrenheit($given_value)
{
    $fahrenheit=($given_value*2.25)+32;
    return number_format($fahrenheit,2);
}
// Reaumur to celsius
function reaumur_to_celsius($given_value)
{
    $celsius=$given_value*1.25;
    return number_format($celsius,2);
}
// Reaumur to kelvin
function reaumur_to_kelvin($given_value)
{
    $kelvin=($given_value*125)+273.15;
    return number_format($kelvin,2);
}
// Reaumur to rankine
function reaumur_to_rankine($given_value)
{
    $rankine=($given_value*2.25)+491.67;
    return number_format($rankine,2);
}
// Reaumur to newton
function reaumur_to_newton($given_value)
{
    $newton=$given_value*33/80;
    return number_format($newton,2);
}
// Reaumur to delisle
function reaumur_to_delisle($given_value)
{
    $delisle=(60-$given_value)*20/7;
    return number_format($delisle,2);
}
// Reaumur to romer
function reaumur_to_romer($given_value)
{
    $romer=($given_value*0.65625)+7.5;
    return number_format($romer,2);
}
?>

<?php
    if(isset($_POST['btn']))
    {
        $first_temp_type_name=$_POST['first_temp_type_name'];
        $second_temp_type_name=$_POST['second_temp_type_name'];
        $given_value=$_POST['given_value'];

        //Fahrenheit to celsius, kelvin, rankine, newton, delisle, reaumur and romer
        if ($first_temp_type_name=='fahrenheit')
        {
            if ($second_temp_type_name=='celsius')
            {
                $celsius=fahrenheit_to_celsius($given_value);
                $result = "$given_value Fahrenheit = $celsius Celsius";
            } elseif ($second_temp_type_name=='kelvin') {
                 $kelvin=fahrenheit_to_kelvin($given_value);
                 $result = "$given_value Fahrenheit = $kelvin Kelvin";
            } elseif ($second_temp_type_name=='rankine') {
                 $rankine=fahrenheit_to_rankine($given_value);
                 $result = "$given_value Fahrenheit = $rankine Rankine";
            } elseif ($second_temp_type_name=='newton') {
                 $newton=fahrenheit_to_newton($given_value);
                 $result = "$given_value Fahrenheit = $rankine Newton";
            } elseif ($second_temp_type_name=='delisle') {
                 $delisle=fahrenheit_to_newton($given_value);
                 $result = "$given_value Fahrenheit = $delisle Delisle";
            } elseif ($second_temp_type_name=='reaumur') {
                 $reaumur=fahrenheit_to_reaumur($given_value);
                 $result = "$given_value Fahrenheit = reaumur Reaumur";
            } elseif ($second_temp_type_name=='romer') {
                 $romer=fahrenheit_to_newton($given_value);
                 $result = "$given_value Fahrenheit = romer Romer";
            } else {
                    $result = "$given_value Fahrenheit";
            }
        }

    //Celsius to fahrenheit, kelvin, rankine, newton, delisle, reaumur and romer
    if ($first_temp_type_name=='celsius')
    {

        if ($second_temp_type_name=='fahrenheit')
        {
            $fahrenheit=celsius_to_fahrenheit($given_value);
            $result = "$given_value Celsius  = $fahrenheit Fahrenheit";
        } elseif ($second_temp_type_name=='kelvin') {
            $kelvin=celsius_to_kelvin($given_value);
            $result = "$given_value Celsius   = $kelvin Kelvin";
        } elseif ($second_temp_type_name=='rankine') {
            $rankine=celsius_to_rankine($given_value);
            $result = "$given_value Celsius   = $rankine Rankine";
        } elseif ($second_temp_type_name=='newton') {
            $newton=celsius_to_newton($given_value);
            $result = "$given_value Celsius   = $newton Newton";
        } elseif ($second_temp_type_name=='delisle') {
            $delisle=celsius_to_delisle($given_value);
            $result = "$given_value Celsius   = $delisle Delisle";
        } elseif ($second_temp_type_name=='reaumur') {
            $reaumur=celsius_to_reaumur($given_value);
            $result = "$given_value Celsius   = $reaumur Reaumur";
        } elseif ($second_temp_type_name=='romer') {
            $romer=celsius_to_romer($given_value);
            $result = "$given_value Celsius   = $romer Romer";
        } else {
            $result = "$given_value Celsius";
        }
    }

    //Kelvin to fahrenheit, celsius, rankine, newton, delisle, reaumur and romer
    if ($first_temp_type_name=='kelvin')
    {
        if ($second_temp_type_name=='fahrenheit')
        {
            $fahrenheit=kelvin_to_fahrenheit($given_value);
            $result = "$given_value Kelvin  = $fahrenheit Fahrenheit";
        } elseif ($second_temp_type_name=='celsius') {
            $celsius=kelvin_to_celsius($given_value);
            $result = "$given_value Kelvin  = $celsius Celsius";
        } elseif ($second_temp_type_name=='rankine') {
            $celsius=kelvin_to_rankine($given_value);
            $result = "$given_value Kelvin  = $rankine Rankine";
        } elseif ($second_temp_type_name=='newton') {
            $celsius=kelvin_to_newton($given_value);
            $result = "$given_value Kelvin  = $newton Newton";
        } elseif ($second_temp_type_name=='delisle') {
            $celsius=kelvin_to_delisle($given_value);
            $result = "$given_value Kelvin  = $delisle Delisle";
        } elseif ($second_temp_type_name=='reaumur') {
            $celsius=kelvin_to_reaumur($given_value);
            $result = "$given_value Kelvin  = $reaumur Reaumur";
            } elseif ($second_temp_type_name=='romer') {
        $celsius=kelvin_to_romer($given_value);
            $result = "$given_value Kelvin  = $romer Romer";
        } else {
            $result = "$given_value Kelvin";
        }
    }
}

    //Rankine to fahrenheit, celsius, kelvin, newton, delisle, reaumur and romer
    if ($first_temp_type_name=='rankine')
    {
        if ($second_temp_type_name=='fahrenheit')
        {
            $fahrenheit=rankine_to_fahrenheit($given_value);
            $result = "$given_value Rankine  = $fahrenheit Fahrenheit";
        } elseif ($second_temp_type_name=='celsius') {
            $celsius=rankine_to_celsius($given_value);
            $result = "$given_value Rankine = $celsius Celsius";
        } elseif ($second_temp_type_name=='kelvin') {
            $kelvin=rankine_to_kelvin($given_value);
            $result = "$given_value  Rankine = $kelvin Kelvin";
        } elseif ($second_temp_type_name=='newton') {
            $newton=rankine_to_newton($given_value);
            $result = "$given_value  Rankine = $newton Newton";
        } elseif ($second_temp_type_name=='delisle') {
            $delisle=rankine_to_delisle($given_value);
            $result = "$given_value Rankine = $delisle Delisle";
        } elseif ($second_temp_type_name=='reaumur') {
            $reaumur=rankine_to_reaumur($given_value);
            $result = "$given_value Rankine = $reaumur Reaumur";
        } elseif ($second_temp_type_name=='romer') {
            $romer=rankine_to_romer($given_value);
            $result = "$given_value Rankine =  $romer Romer";
        } else {
            $result = "$given_value Rankine";
        }
    }

    //Newton to fahrenheit, celsius, kelvin, rankine, delisle, reaumur and romer
    if ($first_temp_type_name=='newton')
    {
        if ($second_temp_type_name=='fahrenheit')
        {
            $fahrenheit=newton_to_fahrenheit($given_value);
            $result = "$given_value Newton  = $fahrenheit Fahrenheit";
        } elseif ($second_temp_type_name=='celsius') {
            $celsius=newton_to_celsius($given_value);
            $result = "$given_value Newton = $celsius Celsius";
        } elseif ($second_temp_type_name=='kelvin') {
            $kelvin=newton_to_kelvin($given_value);
            $result = "$given_value Newton = $kelvin Kelvin";
        } elseif ($second_temp_type_name=='rankine') {
            $rankine=newton_to_rankine($given_value);
            $result = "$given_value Newton = $rankine Rankine";
        } elseif ($second_temp_type_name=='delisle') {
            $delisle=newton_to_delisle($given_value);
            $result = "$given_value Newton = $delisle Delisle";
        } elseif ($second_temp_type_name=='reaumur') {
            $reaumur=newton_to_reaumur($given_value);
            $result = "$given_value Newton = $reaumur Reaumur";
        } elseif ($second_temp_type_name=='romer') {
            $romer=newton_to_romer($given_value);
            $result = "$given_value Newton = $romer Romer";
        } else {
            $result = "$given_value Newton";
        }
    }

    //Delisle to fahrenheit, celsius, kelvin, rankine, newton, reaumur and romer
    if ($first_temp_type_name=='delisle')
    {
        if ($second_temp_type_name=='fahrenheit')
        {
            $fahrenheit=delisle_to_fahrenheit($given_value);
            $result = "$given_value Delisle = $fahrenheit Fahrenheit";
        } elseif ($second_temp_type_name=='celsius') {
            $celsius=rankine_to_celsius($given_value);
            $result = "$given_value Delisle = $celsius Celsius";
        } elseif ($second_temp_type_name=='kelvin') {
            $kelvin=rankine_to_kelvin($given_value);
            $result = "$given_value Delisle = $kelvin Kelvin";
        } elseif ($second_temp_type_name=='rankine') {
            $rankine=rankine_to_rankine($given_value);
            $result = "$given_value Delisle = $rankine Rankine";
        } elseif ($second_temp_type_name=='newton') {
            $newton=rankine_to_newton($given_value);
            $result = "$given_value Delisle = $newton Newton";
        } elseif ($second_temp_type_name=='reaumur') {
            $reaumur=rankine_to_reamur($given_value);
            $result = "$given_value Delisle = $reaumur Reaumur";
        } elseif ($second_temp_type_name=='romer') {
            $romer=rankine_to_romer($given_value);
            $result = "$given_value Delisle = $romer Romer";
        } else {
            $result = "$given_value Delisle";
        }
    }

    //Reaumur to fahrenheit, celsius, kelvin, rankine, newton, delisle and romer
    if ($first_temp_type_name=='reaumur')
    {
        if ($second_temp_type_name=='fahrenheit')
        {
            $fahrenheit=reaumur_to_fahrenheit($given_value);
            $result = "$given_value Reaumur = $fahrenheit Fahrenheit";
        } elseif ($second_temp_type_name=='celsius') {
            $celsius=reaumur_to_celsius($given_value);
            $result = "$given_value Reaumur = $celsius Celsius";
        } elseif ($second_temp_type_name=='kelvin') {
            $kelvin=reaumur_to_kelvin($given_value);
            $result = "$given_value Reaumur = $kelvin Kelvin";
        } elseif ($second_temp_type_name=='rankine') {
            $rankine=reaumur_to_rankine($given_value);
            $result = "$given_value Reaumur = $rankine Rankine";
        } elseif ($second_temp_type_name=='newton') {
            $newton=reaumur_to_newton($given_value);
            $result = "$given_value Reaumur = $newton Newton";
        } elseif ($second_temp_type_name=='delisle') {
            $delisle=reaumur_to_delisle($given_value);
            $result = "$given_value Reaumur = $delisle Delisle";
        } elseif ($second_temp_type_name=='romer') {
            $romer=reaumur_to_romer($given_value);
            $result = "$given_value Reaumur = $romer Romer";
        } else {
            $result = "$given_value Reaumur";
        }
    }

    //Romer to fahrenheit, celsius, kelvin, rankine, newton, delisle and reaumur
    if ($first_temp_type_name=='romer')
    {
        if ($second_temp_type_name=='fahrenheit')
        {
            $fahrenheit=romer_to_fahrenheit($given_value);
            $result = "$given_value Romer = $fahrenheit Fahrenheit";
        } elseif ($second_temp_type_name=='celsius') {
            $celsius=romer_to_celsius($given_value);
            $result = "$given_value Romer = $celsius Celsius";
        } elseif ($second_temp_type_name=='kelvin') {
            $kelvin=romer_to_kelvin($given_value);
            $result = "$given_value Romer = $kelvin Kelvin";
        } elseif ($second_temp_type_name=='rankine') {
            $rankine=romer_to_rankine($given_value);
            $result = "$given_value Romer = $rankine Rankine";
        } elseif ($second_temp_type_name=='newton') {
            $newton=romer_to_newton($given_value);
            $result = "$given_value Romer = $newton Newton";
        } elseif ($second_temp_type_name=='delisle') {
            $delisle=romer_to_delisle($given_value);
            $result = "$given_value Romer = $delisle Delisle";
        } elseif ($second_temp_type_name=='reaumur') {
            $reaumur=romer_to_reaumur($given_value);
            $result = "$given_value Romer = $reaumur Reaumur";
        } else {
            $result = "$given_value Romer";
        }
    }

  */  ?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <meta name="description" content="A web based application to convert temperatures from one scale to another." />
        <link href='https://fonts.googleapis.com/css?family=Unkempt:400,700|Averia+Sans+Libre:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/tempstyles.css">
        <script src="https://code.jquery.com/jquery-2.2.0.js" type="text/javascript"></script>


        <title>Temperature Converter - Project One</title>
    </head>

    <body>

        <div class="site-wrapper">
            <div class="form-wrapper">
                <form action="results.php" method="post" name="temp_conversion" id="temp_form">
                    <h2>Convert From</h2>
                    <div class="btn-wrapper-outer" id="btn-wrapper-one">
                        <div class="btn-wrapper-inner">
                    <a href="javascript:void(0)" id="fahr_btn_one" onclick="return scaleOne_Click('fahrenheit');"><div class="scale_btn" id="fahr-wrapper">
                        <h3>
                            Fahrenheit
                        </h3>
                        </div></a>
                        <a href="javascript:void(0)" id="cels_btn_one" onclick="return scaleOne_Click('celsius')"><div class="scale_btn">
                        <h3>
                            Celsius
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="kelvin_btn_one" onclick="return scaleOne_Click('kelvin')"><div class="scale_btn">
                        <h3>
                            Kelvin
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="newton_btn_one" onclick="return scaleOne_Click('newton')"><div class="scale_btn">
                        <h3>
                            Newton
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="rankine_btn_one" onclick="return scaleOne_Click('rankine')"><div class="scale_btn">
                        <h3>
                            Rankine
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="romer_btn_one" onclick="return scaleOne_Click('romer')"><div class="scale_btn">
                        <h3>
                            Romer
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="delisle_btn_one" onclick="return scaleOne_Click('delisle')"><div class="scale_btn">
                        <h3>
                            Delisle
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="reaumur_btn_one" onclick="return scaleOne_Click('reaumur')"><div class="scale_btn">
                        <h3>
                            Reaumur
                        </h3>
                        </div></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <input type="hidden" name="first_temp_type_name" value="" id="first_scale">
                    <div class="input-wrapper"><input type="text" name="given_value" placeholder="Enter The Temperature" id="temp_input" value="<?php echo $result; ?>" onfocus="if(this.value  != '') { this.value = ''; } "></div>
                    <!--<div class="result-wrapper"><h3 id="label_one"></h3></div>-->
                    <h2 id="label_two">Convert To</h2>
                    <div class="btn-wrapper-outer">
                        <div class="btn-wrapper-inner">
                        <a href="javascript:void(0)" id="fahr_btn_two" onclick="return scaleTwo_Click('fahrenheit')"><div class="scale_btn_two">
                        <h3>
                            Fahrenheit
                        </h3>
                        </div></a>
                        <a href="javascript:void(0)" id="cels_btn_two" onclick="return scaleTwo_Click('celsius')"><div class="scale_btn_two">
                        <h3>
                            Celsius
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="kelvin_btn_two" onclick="return scaleTwo_Click('kelvin')"><div class="scale_btn_two">
                        <h3>
                            Kelvin
                        </h3>
                        </div></a>
                        <a href="javascript:void(0)" id="newton_btn_two" onclick="return scaleTwo_Click('newton')"><div class="scale_btn_two">
                        <h3>
                            Newton
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="newton_btn_two" onclick="return scaleTwo_Click('rankine')"><div class="scale_btn_two">
                        <h3>
                            Rankine
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="romer_btn_two" onclick="return scaleTwo_Click('romer')"><div class="scale_btn_two">
                        <h3>
                            Romer
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="delisle_btn_two" onclick="return scaleTwo_Click('delisle')"><div class="scale_btn_two">
                        <h3>
                            Delisle
                        </h3>
                        </div></a>
                    <a href="javascript:void(0)" id="reaumur_btn_two" onclick="return scaleTwo_Click('reaumur')"><div class="scale_btn_two">
                        <h3>
                            Reaumur
                        </h3>
                        </div></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <input type="hidden" name="second_temp_type_name" value="" id="second_scale">
                    <input type="submit" name="btn" value="Convert" id="submit_button">
                </form>
            </div>

        </div>

        <div class="result-wrapper"></div>

        <script type="text/javascript">
            //add value to first hidden form field on button click
            function scaleOne_Click(val){
                document.getElementById('first_scale').value = val;
                return true;
            }
            //add value to second hidden form field on button click
            function scaleTwo_Click(val){
                document.getElementById('second_scale').value = val;
                return true;
            }
            //remove/add "active" class based on which scale button of convert from is clicked
            $(".scale_btn").on("click", function(){
               $(".scale_btn").removeClass('active');
                $(this).addClass('active');
                $('body').animate({scrollTop: $('#temp_input').offset().top}, 'slow');
            });
            //remove/add "active" class based on which scale button of convert two is clicked
            $(".scale_btn_two").on("click", function(){
               $(".scale_btn_two").removeClass('active');
                $(this).addClass('active');
            });

            $('#temp_form').submit(function(e){
            e.preventDefault(); // Prevent Default Submission

            //submit the form using AJAX
            $.ajax({
            url: 'results.php', //process form data with results.php
            type: 'POST', // specifies the POST method
            data: $(this).serialize(), // it will serialize the form data
            dataType: 'html' //requests html from results.php to be returned.
            })
            //when form data is sent and processed the data requested fades into current page
            .done(function(data){
            $('.result-wrapper').fadeIn('slow', function(){
            $('.result-wrapper').fadeIn('slow').html(data);
            $('body').animate({scrollTop:0}, 'fast');
            $('html').addClass('no-scroll');
                });
            })
            //on failure to submit form alert box will display with error message
            .fail(function(){
            alert('Form Submission Failed!');
            });
            });

            //first attempt at AJAX submission guided by using the jquery documentation couldn't get this to work, it's also a bit long winded compared to the working version
            /*show results div on submit button click
            $("#submit_button").click(function(){
                $('body').scrollTop(0);
            });

            /*submit form using ajax
            $("#temp_form").submit(function(event) {

            // stop form from submitting normally
            event.preventDefault();

            // get the action attribute from the <form action=""> element
            var $form = $( this ),
            url = $form.attr( 'action' );

            // Send the data using post with element id first_scale, temp_input, second_scale
            var posting = $.post( url, {  first_scale: $('#first_scale').val(), temp_input: $('#temp_input').val(), second_scale: $('#second_scale').val() });

            posting.done(function(data) {
                    var content = $(data).find('.result-wrapper');
                    $(".result-wrapper").empty().append(content);
                });

    });*/

        </script>
    </body>
