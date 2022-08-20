<?php

$nums1 = [1,2,3,4];
$nums2 = [4,3,2,1];
$nums3 = [1,2,3,4];

echo ($nums1 == $nums2) ? '$nums1 == $nums2<br />' : '$nums1 != $nums2<br />';
echo ($nums1 == $nums3) ? '$nums1 == $nums3<br />' : '$nums1 != $nums3<br />';
echo ($nums1 === $nums3) ? '$nums1 is identical to $nums3<br />' : '$nums1 is not identical $nums3<br />';

echo '<pre>';
print_r($nums1);
print_r($nums2);
print_r($nums3);
 
?>