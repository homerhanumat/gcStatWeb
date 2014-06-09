var current = 0;
var img = [
    "images/EmpRuleBetween68.png",
    "images/EmpRuleOutside68.png",
    "images/EmpRuleBetween95.png",
    "images/EmpRuleOutside95.png",
    "images/EmpRuleBetween99.png",
    "images/EmpRuleOutside99.png"
    ];
            
function changeImage(){
    current = ((current +1) % 6);
    document.getElementById("EmpRuleIcon").src=img[current];
};