const designTab = document.querySelector(".tab--design");
const developmentTab = document.querySelector(".tab--development");

const activateTab = (btnActivated, btnDisabled) => {
    btnActivated.classList.remove("active");
    btnDisabled.classList.remove("active");
    btnActivated.classList.add("active");
};

developmentTab.addEventListener("click", () => {
    activateTab(developmentTab, designTab);
});

designTab.addEventListener("click", () => {
    activateTab(designTab, developmentTab);
});
