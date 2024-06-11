const states = document.querySelectorAll(".state");

states.forEach((state) => {
    state.addEventListener("click", () => {
        const stateName = state.id;
        window.location.href = `${stateName}.html`;
    });
});
