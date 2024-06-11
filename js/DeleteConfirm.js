function confirmDelete(product_id) {
    if (confirm("Are you sure you want to delete this product?")) {
    window.location.href = 'delete.php?id=' + product_id;
    }
}
