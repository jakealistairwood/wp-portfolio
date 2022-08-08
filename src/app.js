const designTab = document.querySelector(".tab--design");
const developmentTab = document.querySelector(".tab--development");

console.log(designTab);

const renderProjects = (btnActivated, btnDisabled) => {
    btnActivated.classList.remove("active");
    btnDisabled.classList.remove("active");
    btnActivated.classList.add("active");
};

developmentTab.addEventListener("click", () => {
    renderProjects(developmentTab, designTab);
});

designTab.addEventListener("click", () => {
    renderProjects(designTab, developmentTab);
});
