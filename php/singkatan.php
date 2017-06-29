<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 29/5/17
 * Time: 12:47 PM
 *
 * Statement:
 * Given two strings s1 and s2, merge them into one string by overlapping
 * the suffix of the first string and the prefix of the second string.
 * If there's nothing to concatenate, return the concatenation of the strings.
 *
 * Example:
 * For s1 = "cesario" and s2 = "oputera", the output should be singkatan(s1, s2) = "cesarioputera".
 * The strings overlap by the character 'o', making the answer "cesarioputera".
 *
 * Input:
 * s1: "pakoper"
 * s2: "perxxpa"
 *
 * Output:
 * pakoperxxpa
 *
 *
 * Case 3:
 * kcwwiclwiezxjjcfbujmdgwdpxgpobbxqozigtgxftynbflqftaconbjmzfphzafqilchsgesmdhaacasrrxbvbbvgtmehhencmgehgkgrvusjoktdfwkkulqopbjttbpe
 * kcwwiclwiezxjjcfbujmdgwdpxgpobbxqozigtgxftynbflqftaconbjmzfphzafqilchsgesmdhaacasrrxbvbbvgtmehhencmgehgkgrvusjoktdfwkkulqopbjttbpewwkepfzhdzumlpycpycboariiaxtdrlgcjbevwlyzfgvdycrvlflssuwqokaaouppnvidihyofufwqqvmbgtatmhfpokfehgvanxiidrkqoqbirwrcefsclirzwezbwrtluikxmuubxkixveiryylvcdkudmvukbwcgmfsuyglckyvxezeqefdcohqqkpgfirkqpeqknifdyqapcqzlutsleneaghjyvqofuqqimubgzjbwhjmbkhtltsbjzfemenqvjhkhqqzmdtyynpkhdyfjghefbfgxtfcsfohnuvqxcodjgrjkxcidositmhoyjkbllzbsihsgpwlsjdtpfzeoukudnycypaeldmhlpisosptlrluimxdkfufzyxhgqizpbbvmqohfzromhmmphzbklcotyozhzaunsklnwstetpdyzsoyrmpxyzphtlkvzmmkdsaauevwzukynlmtvanfibmzqqwzrwnbvxsqucfnozfhrulmzxjjchhmfozidmpjmrqvezarigcjpzqrqywstccmqffsjbezlmypqvstupdsgrfrwyeiqvzbepagxtepqwtwspbufejaquwrxawsylahrqexfypkmvowodlqcaaueznwbochjtyzxwzvvojlprzwzbzdkcofpibqztgpltosxtzeufiryjqdydvrbprwjissdghvsichcsntchcoxspsgiwmrlxhkjzrjpjwvjogyqpmznwnptzwvnriqec
 * kcwwiclwiezxjjcfbujmdgwdpxgpobbxqozigtgxftynbflqftaconbjmzfphzafqilchsgesmdhaacasrrxbvbbvgtmehhencmgehgkgrvusjoktdfwkkulqopbjttbpekcwwiclwiezxjjcfbujmdgwdpxgpobbxqozigtgxftynbflqftaconbjmzfphzafqilchsgesmdhaacasrrxbvbbvgtmehhencmgehgkgrvusjoktdfwkkulqopbjttbpewwkepfzhdzumlpycpycboariiaxtdrlgcjbevwlyzfgvdycrvlflssuwqokaaouppnvidihyofufwqqvmbgtatmhfpokfehgvanxiidrkqoqbirwrcefsclirzwezbwrtluikxmuubxkixveiryylvcdkudmvukbwcgmfsuyglckyvxezeqefdcohqqkpgfirkqpeqknifdyqapcqzlutsleneaghjyvqofuqqimubgzjbwhjmbkhtltsbjzfemenqvjhkhqqzmdtyynpkhdyfjghefbfgxtfcsfohnuvqxcodjgrjkxcidositmhoyjkbllzbsihsgpwlsjdtpfzeoukudnycypaeldmhlpisosptlrluimxdkfufzyxhgqizpbbvmqohfzromhmmphzbklcotyozhzaunsklnwstetpdyzsoyrmpxyzphtlkvzmmkdsaauevwzukynlmtvanfibmzqqwzrwnbvxsqucfnozfhrulmzxjjchhmfozidmpjmrqvezarigcjpzqrqywstccmqffsjbezlmypqvstupdsgrfrwyeiqvzbepagxtepqwtwspbufejaquwrxawsylahrqexfypkmvowodlqcaaueznwbochjtyzxwzvvojlprzwzbzdkcofpibqztgpltosxtzeufiryjqdydvrbprwjissdghvsichcsntchcoxspsgiwmrlxhkjzrjpjwvjogyqpmznwnptzwvnriqec
 */


function singkatan($s1, $s2)
{

    $t = '';
    $pos = -1;
    $j = -1;
    $result = '';
    $m1 = strlen($s1);
    $m2 = strlen($s2);
    for ($i = 0; $i < $m1; $i++) {
        if ($i < strlen($s2)) {
            $t .= $s2[$i];
            $pos = strpos($s1, $t);
            if ($pos != 0)
                $j = $pos;
        }
    }

    if ($j == -1) {
        if (strcmp($s1, $s2)==0)
            $result = $s1;
        elseif (strpos($s2, $s1) !== false)
            $result = $s1;
        else
            $result = $s1 . $s2;
    } elseif ($j == 0) {
        $result = $s1 . substr($s2, 1);
    } else
        $result = substr($s1, 0, $j) . $s2;

    return $result;
}

print singkatan('abc', 'abc');