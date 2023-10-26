// JSON DES LANGAGES
let lang = [
  { name: "PHP", imageName: "php.png" },
  { name: "JS", imageName: "js.png" },
  { name: "NodeJS", imageName: "node.png" },
  { name: "React", imageName: "react.png" },
];

const slider = document.getElementById("slider");

for (let i = 0; i < lang.length; i++) {
  let slide = document.createElement("div");
  slide.className = "slide";
  let img = document.createElement("img");
  img.src = "./public/images/" + lang[i].imageName;
  let p = document.createElement("p");
  p.textContent = lang[i].name;
  slide.appendChild(img);
  slide.appendChild(p);
  slider.appendChild(slide);
}
