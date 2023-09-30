<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // หารูปภาพทั้งหมดที่มีคลาส 'img-popup'
        var images = document.querySelectorAll('.img-popup');

        // สร้าง popup element
        var popup = document.createElement('div');
        popup.className = 'popup';

        // สร้างเนื้อหาภายใน popup
        var popupContent = document.createElement('div');
        popupContent.className = 'popup-content';
        var popupImage = document.createElement('img');
        popupImage.className = 'popup-image';
        popupContent.appendChild(popupImage);
        popup.appendChild(popupContent);

        // เพิ่ม popup เข้าไปใน body
        document.body.appendChild(popup);

        // สร้างฟังก์ชันเพื่อแสดง popup
        function showPopup(imageSrc) {
            popupImage.src = imageSrc;
            popup.style.display = 'block';

        }

        // สร้างฟังก์ชันเพื่อซ่อน popup
        function hidePopup() {
            popup.style.display = 'none';
        }

        // เพิ่มการตั้งค่าคลิกให้กับรูปภาพ
        images.forEach(function(image) {
            image.addEventListener('click', function() {
                showPopup(image.src);
            });
        });

        // เพิ่มการตั้งค่าคลิกให้กับพื้นหลัง popup เพื่อซ่อน popup เมื่อคลิก
        popup.addEventListener('click', function() {
            hidePopup();
            event.stopPropagation();
        });

        // หยุดการกระจายการคลิกจาก popup content
        popupContent.addEventListener('click', function(event) {
            event.stopPropagation();
        });
    });


    const checkbox = document.getElementById("checkbox")
    checkbox.addEventListener("change", () => {
        document.body.classList.toggle("dark")
    })

    const menu = document.querySelector(".menu");
    const toggle = document.querySelector(".toggle");
    toggle.addEventListener("click", () => {
        menu.classList.toggle("active");
    })
    
</script>