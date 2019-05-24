const COUNT = 32;
let info;

document.addEventListener("DOMContentLoaded", () => {
	document.getElementById("baymau").onclick = () => {
		info = document.getElementById("dust");
		disintegrate(info);
	};
});
document.addEventListener("DOMContentLoaded", () => {
	document.getElementById("baymau2").onclick = () => {
		info = document.getElementById("dust");
		disintegrate(info);
	};
});

// Particle effect
function disintegrate(el) {
	const container = document.createElement("div");
	html2canvas(el).then(canvas => {
		// document.body.appendChild(canvas);
		// Convert #info to canvas
		const ctx = canvas.getContext("2d");
		const { width, height } = canvas;
		// Get canvas pixel data
		const originalFrame = ctx.getImageData(0, 0, width, height);
		// Create multiple pixel objects in the loop,
		// note that the pixel objects are transparent by default
		const frames = [];
		for (let i = 0; i < COUNT; i++) {
			frames[i] = ctx.createImageData(width, height);
		}

		// Randomly distribute original pixel data to canvases, create particles
		for (let x = 0; x < width; x++) {
			for (let y = 0; y < height; y++) {
				// Randomly pick pixel objects
				const frameIndex = Math.floor(Math.random() * COUNT);
				// Current pixel position: calculate which pixel point is currently traversing by x,y
				// form left to right
				const pixelIndex = 4 * (y * width + x);
				// Need to set 4 values (RGBA)
				for (let z = 0; z < 4; z++) {
					frames[frameIndex].data[pixelIndex + z] = originalFrame.data[pixelIndex + z];
				}
			}
		}

		// Add parent container
		container.classList.add("disintegration-container");
		container.style.width = `${width}px`;
		container.style.height = `${height}px`;

		// Translate pixel object and fill it in canvas
		const $canvasNodes = frames.map((item, i) => {
			const $c = canvas.cloneNode(true);
			$c.getContext("2d").putImageData(item, 0, 0);
			$c.style.transitionDelay = `${i / COUNT}s`;
			container.appendChild($c);
			return $c;
		})

		// Add hidden animate image to info element
		el.classList.add("info-hide-short");
		// Display the copied image 
		el.parentNode.appendChild(container);
		// Force reflow: Because of the use of append, 
		// the browser internally optimizes the style changes,
		// so if you don't force the browser to rearrange, 
		// the style will be changed and the entire element will be added to the page for rendering
		container.offsetLeft;

		// Animate the particles and the full image begins to be "dusted"
		$canvasNodes.forEach((item, i) => {
			item.style.transform = `rotate(${i * Math.random()}deg) translate(${i * Math.random()}px)`;
			item.style.opacity = 0;
		})
	})
}
