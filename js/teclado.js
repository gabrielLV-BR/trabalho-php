let cu = []

const keyboard = document.querySelector(".keyboard");
const keys = keyboard.childNodes.forEach(key => {
  if(key.nodeName != "DIV") return;
  cu.push({
    key: key,
    code: key.textContent
  })
})

console.log(cu);

// function _(key, w = 1, h = 1) {
//   let element = document.createElement("div")
//   element.className = `key ${key == "" ? 'space' : key}`
//   element.innerText = key
//   return element
// }


// // const keys = [
// //   _("Esc"),
// //   _(""),
// //   _("F1"),
// //   _("F2"),
// //   _("F3"),
// //   _("F4"),
// //   _(""),
// //   _("F5"),
// //   _("F6"),
// //   _("F7"),
// //   _("F8"),
// //   _(""),
// //   _("F9"),
// //   _("F10"),
// //   _("F11"),
// //   _("F12"),
// //   _("PrtSc"),
// //   _("ScrLk"),
// //   _("Pause"),
// //   _(""),
// //   _(""),
// //   _(""),
// //   _(""),
// // ]

// let cu = [
//   "Ecs. .F1.F2.F3.F4. .F5.F6.F7.F8. .F9.F10.F11.F12.PrtSc.ScrLk.Pause. . . .",
//   "Ecs. .F1.F2.F3.F4. .F5.F6.F7.F8. .F9.F10.F11.F12.PrtSc.ScrLk.Pause. . . .",
//   "Ecs. .F1.F2.F3.F4. .F5.F6.F7.F8. .F9.F10.F11.F12.PrtSc.ScrLk.Pause. . . .",
//   "Ecs. .F1.F2.F3.F4. .F5.F6.F7.F8. .F9.F10.F11.F12.PrtSc.ScrLk.Pause. . . .",
//   "Ecs. .F1.F2.F3.F4. .F5.F6.F7.F8. .F9.F10.F11.F12.PrtSc.ScrLk.Pause. . . .",
//   "Ctrl.W.Alt. . . . . . . . . . .F10.F11.F12.PrtSc.ScrLk.Pause. . . .",
// ]

// document.querySelectorAll(".keyboard").forEach(k => {
//   for(const j of cu) {
//     k.append(...(j.split(".").map(i => _(i))));
//   }
// })