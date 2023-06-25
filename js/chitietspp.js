const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);

const chooseSize = document.querySelector(".sub-swap>.swatch-element"),
chosseSize1 = document.querySelector(".sub-swap>.swatch-element>label")
chooseSize.addEventListener("click",()=>{
    chooseSize1.classList.toggle("sd")
})


// Choose size
document.addEventListener('DOMContentLoaded', function() {
    var sizeButtons = document.getElementsByClassName('swatch-element');
  
    for (var i = 0; i < sizeButtons.length; i++) {
      sizeButtons[i].addEventListener('click', function() {
        // Xóa lớp active trên tất cả các nút size
        for (var j = 0; j < sizeButtons.length; j++) {
          sizeButtons[j].querySelector('label').classList.remove('active');
          sizeButtons[j].children[0].setAttribute('name',"option2");

        }
        // Thêm lớp active vào nút size được nhấp vào
        this.querySelector('label').classList.add('active');
        this.children[0].setAttribute('name',"option3");
      });
    }
  });
  
document.addEventListener('DOMContentLoaded', function() {
    var minusButton = document.querySelector('.qty-btn[value="-"]');
    var plusButton = document.querySelector('.qty-btn[value="+"]');
    var quantityInput = document.getElementById('quantity');
  
    minusButton.addEventListener('click', function() {
      var currentValue = parseInt(quantityInput.value);
      if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
      }
    });
  
    plusButton.addEventListener('click', function() {
      var currentValue = parseInt(quantityInput.value);
      quantityInput.value = currentValue + 1;
    });
});

