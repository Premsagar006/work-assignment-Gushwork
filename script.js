let lastScrollTop = 0;
const mainHeader = document.getElementById("mainHeader");
const firstFoldHeight = window.innerHeight; // The height of the first section (fold)

// 🔹 STICKY HEADER LOGIC
window.addEventListener("scroll", () => {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
  let scrollingDown = currentScroll > lastScrollTop;

  if (currentScroll > firstFoldHeight) {
    mainHeader.classList.add("is-sticky");
    if (scrollingDown) {
      mainHeader.classList.add("show");
      mainHeader.classList.remove("hide");
    } else {
      mainHeader.classList.add("hide");
      mainHeader.classList.remove("show");
    }
  } else {
    mainHeader.classList.remove("is-sticky", "show", "hide");
  }

  if (currentScroll <= 0) {
    mainHeader.classList.remove("is-sticky", "show", "hide");
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
}, false);

// 🔹 PRODUCT GALLERY & ZOOM LOGIC
document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("imageContainer");
  const mainImage = document.getElementById("mainImage");
  const lens = document.getElementById("lens");
  const preview = document.getElementById("zoomPreview");
  const thumbs = document.querySelectorAll(".thumb");
  const prevBtn = document.querySelector(".prev");
  const nextBtn = document.querySelector(".next");

  let currentIndex = 0;
  const zoom = 3.5; // Increased zoom level for smaller lens

  // GALLERY UPDATE
  function updateGallery(index) {
    thumbs.forEach(t => t.classList.remove("active"));
    thumbs[index].classList.add("active");
    mainImage.src = thumbs[index].src;
    currentIndex = index;
    
    // Update preview image when gallery changes
    if (preview.style.display === "block") {
      preview.style.backgroundImage = `url(${mainImage.src})`;
    }
  }

  thumbs.forEach((thumb, index) => {
    thumb.addEventListener("click", () => updateGallery(index));
  });

  if (prevBtn && nextBtn) {
    prevBtn.addEventListener("click", () => {
      let index = (currentIndex === 0) ? thumbs.length - 1 : currentIndex - 1;
      updateGallery(index);
    });
    nextBtn.addEventListener("click", () => {
      let index = (currentIndex === thumbs.length - 1) ? 0 : currentIndex + 1;
      updateGallery(index);
    });
  }

  // ZOOM LOGIC
  if (container) {
    container.addEventListener("mouseenter", () => {
      lens.style.display = "block";
      preview.style.display = "block";
      preview.style.backgroundImage = `url(${mainImage.src})`;
      preview.style.backgroundSize = `${mainImage.offsetWidth * zoom}px ${mainImage.offsetHeight * zoom}px`;
    });

    container.addEventListener("mouseleave", () => {
      lens.style.display = "none";
      preview.style.display = "none";
    });

    container.addEventListener("mousemove", (e) => {
      const rect = container.getBoundingClientRect();
      
      let x = e.clientX - rect.left - lens.offsetWidth / 2;
      let y = e.clientY - rect.top - lens.offsetHeight / 2;

      // Prevent lens from going outside the image
      if (x < 0) x = 0;
      if (y < 0) y = 0;
      if (x > container.offsetWidth - lens.offsetWidth) x = container.offsetWidth - lens.offsetWidth;
      if (y > container.offsetHeight - lens.offsetHeight) y = container.offsetHeight - lens.offsetHeight;

      lens.style.left = x + "px";
      lens.style.top = y + "px";

      // Move zoom background in the preview panel
      preview.style.backgroundPosition = `-${x * zoom}px -${y * zoom}px`;
    });
  }

  // 🔹 INDUSTRY SLIDER LOGIC (INFINITE LOOP)
  const slider = document.getElementById("slider");
  const prevSliderBtn = document.getElementById("prev");
  const nextSliderBtn = document.getElementById("next");
  const cards = document.querySelectorAll(".industry .card");
  
  if (slider && cards.length > 0) {
    let scrollAmount = 0;
    const gap = 20; // Match the CSS gap
    let cardWidth = cards[0].offsetWidth + gap;
    let maxScroll = (cards.length - 4) * cardWidth; 

    // Update dimensions on resize
    window.addEventListener("resize", () => {
      cardWidth = cards[0].offsetWidth + gap;
      maxScroll = (cards.length - 4) * cardWidth;
      // Adjust scrollAmount to stay aligned
      let currentCard = Math.round(scrollAmount / (cardWidth || 1));
      scrollAmount = Math.min(currentCard * cardWidth, maxScroll);
      slider.style.transform = `translateX(-${scrollAmount}px)`;
    });

    nextSliderBtn.addEventListener("click", () => {
      if (scrollAmount >= maxScroll) {
        scrollAmount = 0; 
      } else {
        scrollAmount += cardWidth;
      }
      slider.style.transform = `translateX(-${scrollAmount}px)`;
    });

    prevSliderBtn.addEventListener("click", () => {
      if (scrollAmount <= 0) {
        scrollAmount = maxScroll; 
      } else {
        scrollAmount -= cardWidth;
      }
      slider.style.transform = `translateX(-${scrollAmount}px)`;
    });
  }

  // 🔹 PROCESS SECTION LOGIC
  const processTabs = document.querySelectorAll(".process .tab");
  const processTitle = document.getElementById("title");
  const processDesc = document.getElementById("desc");
  const processPoints = document.getElementById("points");
  const processImage = document.getElementById("image");
  const processPrevBtn = document.querySelector(".image-box .arrow.left");
  const processNextBtn = document.querySelector(".image-box .arrow.right");

  const processData = [
    {
      title: "High-Grade Raw Material Selection",
      desc: "We use premium PE100 grade HDPE granules to ensure maximum strength and durability for all our piping solutions.",
      points: ["PE100 grade material", "Optimal molecular weight distribution", "High-density polymers"],
      images: ["images/image-asset.webp", "images/image-asset.webp", "images/image-asset.webp"]
    },
    {
      title: "Precision Extrusion Process",
      desc: "Advanced extruders melt and shape the raw material into high-quality pipes with consistent wall thickness and smooth finish.",
      points: ["Automated temperature control", "High-speed production", "Uniform melt distribution"],
      images: ["images/image-asset.webp", "images/image-asset.webp", "images/image-asset.webp"]
    },
    {
      title: "Multi-Stage Vacuum Cooling",
      desc: "Pipes pass through vacuum spray tanks for efficient cooling and shape stabilization to prevent any deformations.",
      points: ["Vacuum spray technology", "Efficient heat dissipation", "Precise shape stabilization"],
      images: ["images/image-asset.webp", "images/image-asset.webp", "images/image-asset.webp"]
    },
    {
      title: "Dimensional Sizing & Calibrating",
      desc: "Vacuum sizing tanks ensure precise outer diameter while internal pressure maintains perfect roundness and wall thickness uniformity.",
      points: ["Laser-guided sizing", "Perfect roundness", "Uniform wall thickness"],
      images: ["images/image-asset.webp", "images/image-asset.webp", "images/image-asset.webp"]
    },
    {
      title: "Rigorous Quality Testing",
      desc: "Every batch undergoes ultrasonic thickness measurement and hydrostatic pressure tests to ensure compliance with global standards.",
      points: ["Ultrasonic measurement", "Hydrostatic testing", "Batch-wise inspection"],
      images: ["images/image-asset.webp", "images/image-asset.webp", "images/image-asset.webp"]
    },
    {
      title: "Automated Pipe Marking",
      desc: "Continuous inkjet marking provides traceability with manufacturing date, batch number, and technical specifications.",
      points: ["Traceability inkjet marking", "Clear specifications", "Batch identification"],
      images: ["images/image-asset.webp", "images/image-asset.webp", "images/image-asset.webp"]
    },
    {
      title: "High-Precision Cutting",
      desc: "Automatic planetary cutters ensure clean, burr-free perpendicular cuts for easy installation and leak-proof joints.",
      points: ["Planetary cutting", "Burr-free finish", "Precision length control"],
      images: ["images/image-asset.webp", "images/image-asset.webp", "images/image-asset.webp"]
    },
    {
      title: "Secure Packaging & Storage",
      desc: "Finished pipes are coiled or bundled securely for safe transportation and efficient storage in the warehouse.",
      points: ["Automatic coiling", "Secure bundling", "Safe transportation"],
      images: ["images/image-asset.webp", "images/image-asset.webp", "images/image-asset.webp"]
    }
  ];

  let currentTabIdx = 0;
  let currentImgIdx = 0;

  function updateProcess(tabIdx, imgIdx = 0) {
    currentTabIdx = tabIdx;
    currentImgIdx = imgIdx;
    const data = processData[tabIdx];

    // Update Tabs
    processTabs.forEach((tab, idx) => {
      tab.classList.toggle("active", idx === tabIdx);
    });

    // Update Text
    processTitle.innerText = data.title;
    processDesc.innerText = data.desc;
    processPoints.innerHTML = data.points.map(p => `<li>${p}</li>`).join("");

    // Update Image
    processImage.src = data.images[imgIdx];
  }

  processTabs.forEach((tab, idx) => {
    tab.addEventListener("click", () => updateProcess(idx));
  });

  if (processPrevBtn && processNextBtn) {
    processPrevBtn.addEventListener("click", () => {
      const imgs = processData[currentTabIdx].images;
      currentImgIdx = (currentImgIdx === 0) ? imgs.length - 1 : currentImgIdx - 1;
      processImage.src = imgs[currentImgIdx];
    });

    processNextBtn.addEventListener("click", () => {
      const imgs = processData[currentTabIdx].images;
      currentImgIdx = (currentImgIdx === imgs.length - 1) ? 0 : currentImgIdx + 1;
      processImage.src = imgs[currentImgIdx];
    });
  }

  // 🔹 FAQ TOGGLE LOGIC
  const faqItems = document.querySelectorAll(".faq-item");
  faqItems.forEach(item => {
    item.addEventListener("click", () => {
      faqItems.forEach(i => {
        if (i !== item) i.classList.remove("active");
      });
      item.classList.toggle("active");
    });
  });
});

/* 🔹 MODAL OPEN/CLOSE LOGIC */
function openModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.style.display = "flex";
  }
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.style.display = "none";
  }
}

/* CLOSE MODAL ON OUTSIDE CLICK */
window.addEventListener("click", function(e) {
  const modals = document.querySelectorAll(".modal, .popup-overlay");
  modals.forEach(modal => {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  });
});