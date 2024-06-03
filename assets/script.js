const style = document.createElement('style');
style.innerHTML = `@media (min-width: 577px) {
    body::after {
    position: absolute;
    content: 'Please check your phone';
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    background: linear-gradient(to right, #00adb5, #ff5722);
    overflow: hidden;
    z-index: 9999;
    color: #fff;
    font-size: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    height: 100vh;
    border: 10px solid #fff;
    padding: 20px;
    box-sizing: border-box;
  }
}
    `;

// Adding the style element to the head of the document
document.head.appendChild(style);


