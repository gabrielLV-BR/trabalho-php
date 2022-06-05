let teclas = []
let leds = []

let audios = {}

for (const audio of document.querySelectorAll("audio")) {
  audio.volume = 0.9
  audio.preservesPitch = false
  audios[audio.id] = audio
}

const custom_mapping = {
  'control': 'ctrl',
  'capslock': 'caps',
  '\'': '"',
  'backspace': 'return',
  'insert': 'ins',
  'pageup': 'pgup',
  'pagedown': 'pgdn',
  'delete': 'del',
  'scrolllock': 'scrlk',
  'numlock': 'num'
}

const keyboard = document.querySelector(".keyboard");
const keys = keyboard.childNodes.forEach(key => {
  if (key.nodeName != "DIV") return;

  const text = key.textContent.toLowerCase();

  if (key.classList.contains("led")) {
    leds.push(key)
  } else {

    key.addEventListener("mousedown", () => {
      switch (text) {
        case "scrlk": {
          leds[0].classList.toggle("active")
          break
        }
        case "num": {
          leds[1].classList.toggle("active")
          break
        }
        case "caps": {
          leds[2].classList.toggle("active")
          break
        }
      }

      handlePlay(text, false)
    })
    key.addEventListener("mouseup", () => handlePlay(text, true))

    teclas.push({
      key: key,
      code: text
    })
  }
})

window.addEventListener("keydown", e => {
  let key = e.key.toLowerCase();

  if (key in custom_mapping) {
    key = custom_mapping[key];
  }

  switch (key) {
    case "scrlk": {
      leds[0].classList.toggle("active")
      break
    }
    case "num": {
      leds[1].classList.toggle("active")
      break
    }
    case "caps": {
      leds[2].classList.toggle("active")
      break
    }
  }
  teclas
    .filter(k => k.code == key)
    .forEach(k => k.key.classList.add("active"));

  handlePlay(key, false)
})

window.addEventListener("keyup", e => {
  let key = e.key.toLowerCase();

  if (key in custom_mapping) {
    key = custom_mapping[key];
  }

  teclas
    .filter(k => k.code == key)
    .forEach(k => k.key.classList.remove("active"));

  handlePlay(key, true)
})

function handlePlay(key, releasing = false) {
  const playFunction = releasing ? playRelease : playClick

  let type = ["enter", "return"].includes(key) ? "alt" : "normal";

  if (key == " ") playFunction("space")
  else playFunction(type)
}

function playClick(type = "normal") {
  const sound = audios[type + "_click"]
  sound.playbackRate = 0.98 + Math.random() * 0.2
  sound.currentTime = 0
  sound.play()
}

function playRelease(type = "normal") {
  const sound = audios[type + "_release"]
  sound.playbackRate = 0.98 + Math.random() * 0.1
  sound.currentTime = 0
  sound.play()
}