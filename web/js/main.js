const filter = document.getElementsByClassName("js-filter");
const filterItems = document.getElementsByClassName("js-filter-item");

for (let item of filter) {
    filterClick(item);
}

function filterClick(item) {
    item.addEventListener("click", (e) => {
        let clickedItem = e.target;
        for (let filterItem of filterItems) {
            if (clickedItem.id === "all") {
                filterItem.classList.remove("hidden");
            }
            else if (filterItem.id !== clickedItem.id) {
                filterItem.classList.add("hidden");
            } else {
                filterItem.classList.remove("hidden");
            }
        }
    })
}