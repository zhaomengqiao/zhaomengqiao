    /**
 * 只保留字符串首尾字符，隐藏中间用*代替（两个字符时只显示第一个）
 * @param  [string] $user_name 字符串
 * @param  [int] $head      左侧保留位数
 * @param  [int] $foot      右侧保留位数
 * @return string 格式化后的姓名
 */
static function substr_cut($user_name,$head,$foot){
    $strlen     = mb_strlen($user_name, 'utf-8');
    $firstStr     = mb_substr($user_name, 0, $head, 'utf-8');
    $lastStr     = mb_substr($user_name, -$foot, $foot, 'utf-8');
    return $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($user_name, 'utf-8') - 1) : $firstStr . str_repeat("*", $strlen - ($head+$foot)) . $lastStr;
} 
