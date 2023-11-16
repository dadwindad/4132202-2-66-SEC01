var num = 10;
let name = "Win";
age = 20;

fruit = ["apple", "mango", "tangmo"];
ojb = { name: "Drusawin", age: 30, tel: "123-434" };

data = { adress: ["69", "jira", "Buriram", 3100], name: "John" };

console.log(fruit[1]);
console.log(ojb.tel);
console.log(data.adress[2]);

document.getElementById("msg").innerHTML = data.adress[2];

let longTxt = data.name + " : " + fruit[0];

longTxt = `${data.name} :
            ${fruit[1]}`;

$(function () {
  $("#msg").html(longTxt);
}); //jQuery ready
