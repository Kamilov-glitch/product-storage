window.addEventListener("load", function() {
    this.document.getElementById("productType").addEventListener("change", function() {
        let div = document.createElement("div");

        let field = document.createElement("input");
        field.setAttribute("type", "text");

        div.appendChild(field);

        document.getElementById("dynamic").appendChild(div);
    })
})