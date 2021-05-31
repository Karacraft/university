function showTab(tabName)
{
    var tabs = document.getElementsByClassName("mytabs");
    for (let index = 0; index < tabs.length; index++) {
        const element = tabs[index];
        if (element.id == tabName)
        {
            element.classList.remove("hidden")
            
        }
        else {
            element.classList.add("hidden")
        }
    }
}

function makeActive(element)
{
    console.log(element);
    var sideMenu = document.getElementsByClassName("sidemenu");
    for (let index = 0; index < sideMenu.length; index++) {
        const element = sideMenu[index];
        element.classList.remove("bg-blue-700")
        element.classList.remove("text-white")
    }
    element.classList.add("bg-blue-700")
    element.classList.add("text-white")
}