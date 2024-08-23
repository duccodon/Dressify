document.addEventListener('DOMContentLoaded', function() {

    const buttons = document.querySelectorAll('.filter-button');
    
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            buttons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
        });
    });

    var modal = document.getElementById('promotionModal');
    var btn = document.getElementById('addPromotionBtn');
    var span = document.getElementsByClassName('close')[0];
    var form = document.getElementById('promotionForm');
    var itemCheckboxes = document.getElementById('itemCheckboxes');

    console.log('Modal:', modal);
    console.log('Button:', btn);
    console.log('Close span:', span);
    console.log('Form:', form);
    console.log('Item checkboxes:', itemCheckboxes);

    if (!btn) {
        console.error('Add Promotion button not found!');
        return;
    }

    // Open modal
    btn.onclick = function() {
        modal.style.display = 'block';
        populateItemCheckboxes();
    }

    // Close modal
    span.onclick = function() {
        modal.style.display = 'none';
    }

    // Close modal if clicking outside
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    // Handle form submission
    form.onsubmit = function(e) {
        e.preventDefault();
        // Here you would typically send the form data to a server
        console.log('Discount Code:', form.discountCode.value);
        console.log('Image:', form.promotionImage.files[0]);
        // Get selected items
        var selectedItems = Array.from(itemCheckboxes.querySelectorAll('input[type="checkbox"]:checked'))
            .map(cb => cb.value);
        console.log('Applied to items:', selectedItems);
        
        // Close the modal after submission
        modal.style.display = 'none';
    }

    function populateItemCheckboxes() {
        // This would typically come from your database
        var items = ['Denim Jacket', 'Blue Jeans', 'Blue Sweater'];
        itemCheckboxes.innerHTML = items.map(item => 
            `<label><input type="checkbox" name="items" value="${item}"> ${item}</label>`
        ).join('');
    }
});
