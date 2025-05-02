
document.addEventListener('DOMContentLoaded', function () {
    // Line Chart
    const lineCanvas = document.getElementById('lineChart');
    if (lineCanvas) {
        const lineCtx = lineCanvas.getContext('2d');
        new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: ['February', 'March'],
                datasets: [{
                    label: 'Total Sessions',
                    data: [10, 21],
                    borderColor: '#f2b98c',
                    backgroundColor: '#f2b98c',
                    tension: 0.3,
                    fill: false,
                    pointBackgroundColor: '#f2b98c',
                    pointBorderColor: '#fff',
                    pointHoverRadius: 6,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: {
                            color: '#69b3dd'
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: context => `x: ${context.label}, y: ${context.raw}` // ✅ fixed template literal
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        title: {
                            display: true,
                            text: 'Total sessions per Year',
                            color: '#69b3dd'
                        },
                        ticks: {
                            color: '#69b3dd'
                        },
                        grid: {
                            display: false
                        }
                    },
                    x: {
                        ticks: {
                            color: '#69b3dd'
                        },
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }

    // Donut Chart
    const donutCanvas = document.getElementById('donutChart');
    if (donutCanvas) {
        const donutCtx = donutCanvas.getContext('2d');
        new Chart(donutCtx, {
            type: 'doughnut',
            data: {
                labels: ['Deposition', 'Demo', 'Arbitration', 'Trial', 'Mediation', 'WitnessPrep', 'Trial Binder'],
                datasets: [{
                    data: [1581, 566, 305, 298, 253, 226, 51],
                    backgroundColor: [
                        '#FFBD59', '#FF6B6B', '#7F57FF', '#2596be',
                        '#cfe9fa', '#475f6e', '#000000'
                    ],
                    cutout: '50%',
                    borderColor: '#e0e0e0',
                    borderWidth: 4
                }]
            },
            options: {
                responsive: true,
                rotation: 0, // ✅ No rotation
                animation: {
                    animateRotate: false
                },
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            color: '#555',
                            usePointStyle: true,
                            padding: 20
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: context => `${context.label}: ${context.raw}` // ✅ fixed template literal
                        }
                    }
                }
            }
        });
    }

    // Theme Toggle
    const toggleBtn = document.getElementById('themeToggle');
    const icon = toggleBtn.querySelector('i');

    toggleBtn.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');

        // Switch between sun and moon icons
        if (document.body.classList.contains('dark-mode')) {
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
        } else {
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const closeBtn = document.getElementById("closeSidebar");
    const openBtn = document.getElementById("openSidebar");
    const sidebar = document.querySelector(".sidebar");
    const main = document.querySelector(".main");

    closeBtn.addEventListener("click", function () {
        sidebar.classList.add("closed");
        main.classList.add("expanded");
        closeBtn.style.display = "none";
        openBtn.style.display = "block";
    });

    openBtn.addEventListener("click", function () {
        sidebar.classList.remove("closed");
        main.classList.remove("expanded");
        openBtn.style.display = "none";
        closeBtn.style.display = "block";
    });
});
const profileImg = document.getElementById("profileImg");
const logoutPopup = document.getElementById("logoutPopup");

profileImg.addEventListener("click", (e) => {
  logoutPopup.style.display = logoutPopup.style.display === "block" ? "none" : "block";
  e.stopPropagation();
});

document.addEventListener("click", () => {
  logoutPopup.style.display = "none";
});

const themeToggle = document.getElementById("themeToggle");
const icon = themeToggle.querySelector("i");

themeToggle.addEventListener("click", () => {
  if (icon.classList.contains("ri-sun-line")) {
    icon.classList.remove("ri-sun-line");
    icon.classList.add("ri-moon-line");
  } else {
    icon.classList.remove("ri-moon-line");
    icon.classList.add("ri-sun-line");
  }
});

















