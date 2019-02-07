<h3>GET WORD</h3>
<form action="">
    <textarea name="alfa" id="" cols="30" rows="10" placeholder="Type some letters"></textarea>
    <button type="submit">show word</button>
</form>
<?php
$words = array(
    0 => 'Cat',
    1 => 'Category',
    3 =>'Yes',
    4 => 'So',
    5 => 'To',
    6 =>'Please',
    7 => 'Thank',
    8 => 'Love',
    10 => 'Amount',
    11 => 'Argume,nt',
    12 => 'Art',
    13 => 'Be',
    14 => 'Beautiful',
    15 => 'Belief',
    16 => 'Cause',
    17 => 'Certain',
    18 => 'Chance'

);

function isContain($letter, $str)
{
    $arr = str_split($str);

    if (in_array($letter, $arr)) {
        return true;
    } else {
        return false;
    }

}

if (isset($_REQUEST['alfa']) && !empty($_REQUEST['alfa'])) {
    $collection = strtolower($_REQUEST['alfa']);
    $matches = false;
    foreach ($words as $word) { //walk through all words
        $word = strtolower($word);
        $arr_coll = str_split($collection);// convert str to arr

        $i = 0;
        foreach ($arr_coll as $char) {

            if (isContain($char, $word)) {
                $i++;
            } else {
                break;
            }
        }
        if ($i == count($arr_coll)) { //condition that all chars are contain in the words
            echo $word.'<br>';
            $matches = true;
        }
    }
    if(!$matches){
        echo 'Sorry no matches';
    }

}





?>