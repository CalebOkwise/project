import laptop from "./classes.js";

const chike_laptop = new laptop(
    "samsung",
    "v5",
    "blue",
    500,
    30,
    "July 5, 2022 15:00:00",
);

const backpack = {
    name: "School Bag",
    colour: "Black",
    width: "15cm",
    depth: "30cm",
    straplength: {
        left: 26,
        right: 26,
    },
    newStrapLength: function (rightstrap, leftstrap) {
        this.straplength.left = leftstrap;
        this.straplength.right = rightstrap;
    },
    zip: false,

}

const chair = {
    material: "wood",
    ChangeMaterial: function (cmaterial) {
        this.material = cmaterial;
    }
}

console.log("The backpack object:", backpack);
console.log("The leftstrap length", backpack.straplength.left);

backpack.newStrapLength(30, 34);

console.log("The new leftstrap:", backpack.straplength.left);

console.log("Chikes laptop colour: ", chike_laptop.color);

chike_laptop.changecolor("green");

console.log("Chikes new laptop colour: ", chike_laptop.color);
console.log("This laptop has been in use for ", chike_laptop.laptop_date(), " days");