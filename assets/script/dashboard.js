document.addEventListener("DOMContentLoaded", () => {
	const urlParams = new URLSearchParams(window.location.search);
	const urlUsername = urlParams.get("user");
	const urlIsAdmin = urlParams.get("isadmin");
	const userEl = document.querySelector("span.username");
	if (urlUsername) {
		userEl.textContent = urlUsername;
	}

	const exitButton = document.querySelector("#logoutButton");
	exitButton.addEventListener("click", () => {
		sessionStorage.clear();
	});

	if (sessionStorage.getItem("privilege") === null) {
		alert("Sesi login anda telah habis. Silahkan login kembali");
		window.location.href = "index.html";
	}

	const mainSection = document.querySelector("main");
	const cardStack = document.querySelector(".card-stack");

	cardStack.addEventListener("click", (e) => {
		e.preventDefault();

		if (e.target.classList.contains("card") && e.target.getAttribute("imgSrc") !== "Siswa") {
			const imgSrc = e.target.getAttribute("imgSrc");
			const menuIndicator = document.querySelector("h2#menu");
			menuIndicator.textContent = imgSrc;
			mainSection.innerHTML = `
            <div class="submenu">
            <img src="./assets/images/menu/${imgSrc}.png " width="100%" alt="">
            <a id="back" href="">Kembali</a>
        </div>
            `;
		} else if (e.target.getAttribute("imgSrc") === "Siswa") {
			window.location.href = "namaSiswa.html";
		}
	});
});
