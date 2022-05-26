const carrosseis = document.querySelectorAll(".carrossel");

for(const carrossel of carrosseis) {
    let children = carrossel.children;

    const images = [...children].filter(c => c.tagName === "IMG");
    let index = 1;

    console.log(images);

    const updateImage = () => {
        const currentImage = images[index];
        index = (index + 1) % images.length;
        const nextImage = images[index];
        const nextestImage = images[(index + 1) % images.length]

        currentImage.style.left = "-100%";
        nextImage.style.opacity = "1";
        nextImage.style.left = "0";
        nextestImage.style.opacity = "0";
        nextestImage.style.left = "100%";
        setTimeout(updateImage, 3000)
    }
    updateImage()
}