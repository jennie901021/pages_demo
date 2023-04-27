// JavaScript 代码，实现随机出现
// 获取人物元素的数组
var characters = document.getElementsByClassName('spaceman');
// 生成随机数，选择一个人物元素
var randomIndex = Math.floor(Math.random() * characters.length);
var randomCharacter = characters[randomIndex];
// 设置人物元素的显示样式
randomCharacter.style.display = 'block';
// 可以根据需要设置其他属性，如位置、动画效果等
// ...