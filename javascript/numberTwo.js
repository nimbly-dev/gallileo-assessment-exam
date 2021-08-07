//The link is not working so I copied the .json and place it inside this folder.



const formComponent = () => {
    this.$form = $([
        "<div>",
        "  <div class='js-alert-box'></div>",
        "  <form id='my-form-to-validate'>",
        "    <input id='login-username' name='login-username'>",
        "  </form>",
        "</div>"
    ].join("\n"));
}

export default formComponent;