const productsDataBaseLocation = "./products_database.json"

export function getSearchBarParam(searchBarParameter = "") {
    let searchBarParams = new URLSearchParams(document.location.search);
    let productIdx = searchBarParams.get(searchBarParameter);

    return productIdx;
}

export async function readProductsDataBase(atProductIdx = 0) {
    try {
        const response = await fetch(productsDataBaseLocation);
        var data = await response.json();

        if (atProductIdx > 0) {
            data = data[atProductIdx];
        }
        
        return data;
    } catch (error) {
        console.error("An error has occured while fetching the database:", error);
    }
}