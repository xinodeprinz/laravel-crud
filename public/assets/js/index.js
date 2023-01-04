function previewImage() {
    const fileInput = document.getElementById('photo-input');
    const imageTag = document.getElementById('photo-img');
    fileInput.click();

    fileInput.onchange = (e) => {
        const image = e.target.files[0];
        const ext = image.name.split('.').pop();
        if (!isImage(ext)) {
            return alert("Please upload an image.");
        }
        const reader = new FileReader();
        reader.onload = function() {
            const result = reader.result;
            imageTag.src = result;
        };
        reader.readAsDataURL(image);
    }
}

function isImage(ext) {
    const exts = ['jpg', 'jpeg', 'png', 'jfif', 'webp'];
    if (exts.includes(ext)) {
        return true;
    }
    return false;
}