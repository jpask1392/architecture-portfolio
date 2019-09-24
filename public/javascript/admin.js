const ajaxUpdateCall = (id) => {
    fetch(`/admin/project/${id}`)
        .then(data => console.log(data))
}