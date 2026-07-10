<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>@yield('title','Ebio-Cares')</title>
  <!-- Stylesheets -->
  <link href="{{ url ('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ url ('assets/css/style.css')}}" rel="stylesheet" />
  <link href="{{ url ('assets/css/style-home-1.css')}}" rel="stylesheet" />

  <link rel="shortcut icon" href="{{ url ('assets/images/logo/favicon.png')}}" type="image/x-icon" />
  <link rel="icon" href="{{ url ('assets/images/logo/favicon.png')}}" type="image/x-icon" />

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <style>
     /* --- Vertical Button (Right Side) --- */
        .vertical-btn {
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            /* writing-mode + rotate creates a perfect bottom-to-top vertical text effect */
            writing-mode: vertical-rl;
            transform: translateY(-50%) rotate(360deg);
            
            padding: 20px 10px;
            background: linear-gradient(135deg, #0D6A37, #121212);
            color: #ffffff;
            font-weight: 600;
            font-size: 16px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            border: none;
            border-radius: 12px 0 0 12px;
           
            cursor: pointer;
            z-index: 1000;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .vertical-btn:hover {
            padding-right: 20px; /* Slides out slightly on hover */
             background: linear-gradient(135deg, #0D6A37, #121212);
            
        }

        /* --- Modal Overlay --- */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(17, 24, 39, 0.6);
            backdrop-filter: blur(5px);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1001;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* --- Modal Content Box --- */
        .modal-content {
            background: #ffffff;
            padding: 35px;
            border-radius: 20px;
            width: 90%;
            max-width: 550px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            transform: translateY(30px) scale(0.95);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .modal-overlay.active .modal-content {
            transform: translateY(0) scale(1);
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 32px;
            font-weight: 300;
            color: #9ca3af;
            background: none;
            border: none;
            cursor: pointer;
            line-height: 1;
            transition: color 0.2s, transform 0.2s;
        }

        .close-btn:hover {
            color: #111827;
            transform: rotate(90deg);
        }

        .modal-header {
            margin-bottom: 25px;
        }

        .modal-header h2 {
            margin: 0 0 8px 0;
            color: #111827;
            font-size: 26px;
            font-weight: 700;
        }

        .modal-header p {
            margin: 0;
            color: #6b7280;
            font-size: 15px;
        }

        /* --- Form Styling --- */
        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 6px;
            font-weight: 500;
            color: #374151;
            font-size: 14px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid #e5e7eb;
            border-radius: 10px;
            font-size: 15px;
            color: #111827;
            background: #f9fafb;
            transition: all 0.2s ease;
            box-sizing: border-box;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #2563eb;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
           background: linear-gradient(135deg, #0D6A37, #121212);
            color: #ffffff;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-top: 10px;
        }

       

        /* --- Responsive Design --- */
        @media (max-width: 600px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            .modal-content {
                padding: 25px 20px;
                border-radius: 16px;
            }
            .vertical-btn {
                font-size: 14px;
                padding: 20px 12px;
            }
        }
    </style>
</head>


<body>

 <!-- Back-to-top start -->
    <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <!-- Back-to-top start -->

@include('frontend.components.navbar')

@yield('content')
     <!-- 1. Vertical Button -->
    <button class="vertical-btn" id="openModalBtn" aria-label="Book an appointment">
        Book an Appointment
    </button>
@include('frontend.components.footer')


<!-- End Page Wrapper -->

   <!-- 2. Modal Overlay -->
    <div class="modal-overlay" id="modalOverlay">
        <div class="modal-content" role="dialog" aria-modal="true">
            <button class="close-btn" id="closeModalBtn" aria-label="Close modal">&times;</button>
            
            <div class="modal-header">
                <h2>Book Your Consultation</h2>
               
            </div>

            <!-- 3. Appointment Form -->
            <form id="appointmentForm">
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required placeholder="John Doe">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email Address </label>
                        <input type="email" id="email" name="email" required placeholder="john@example.com">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required placeholder="(123) 456-7890">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="date">Preferred Date *</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                   
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="service">Treatment*</label>
                    <select id="service" name="service" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Autism">Autism</option>
                        <option value="ADHD">ADHD</option>
                        <option value="Speech Disorder">Speech Disorder</option>
                        <option value="Behaviour Disorder">Behaviour Disorder</option>
                        <option value="Cerebral Palsy">Cerebral Palsy</option>
                        <option value="Paralysis">Paralysis</option>
                        <option value="Diabetes">Diabetes</option>
                        <option value="Lung Diseases">Lung Diseases</option>
                        <option value="Cancer Treatment">Cancer Care Center</option>
                    </select>
                </div>

                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="message">Additional Notes</label>
                    <textarea id="message" name="message" rows="3" placeholder="Any specific requests or details..."></textarea>
                </div>

                <button type="submit" class="submit-btn">Confirm Appointment</button>
            </form>
        </div>
    </div>
    <!-- end banner-section -->

<script src="{{ url ('assets/js/jquery.js')}}"></script>
<script src="{{ url ('assets/js/popper.min.js')}}"></script>
<script src="{{ url ('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ url ('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{ url ('assets/js/jquery-ui.js')}}"></script>
<script src="{{ url ('assets/js/wow.js')}}"></script>
<script src="{{ url ('assets/js/select2.min.js')}}"></script>
<script src="{{ url ('assets/js/appear.js')}}"></script>
<script src="{{ url ('assets/js/bxslider.js')}}"></script>
<script src="{{ url ('assets/js/knob.js')}}"></script>
<script src="{{ url ('assets/js/swiper.min.js')}}"></script>
<script src="{{ url ('assets/js/aos.js')}}"></script>
<script src="{{ url ('assets/js/gsap.min.js')}}"></script>
<script src="{{ url ('assets/js/ScrollTrigger.min.js')}}"></script>
<script src="{{ url ('assets/js/splitType.js')}}"></script>
<script src="{{ url ('assets/js/gsap-scroll-smoother.js')}}"></script>
<script src="{{ url ('assets/js/gsap-scroll-to-plugin.js')}}"></script>
<script src="{{ url ('assets/js/SplitText.min.js')}}"></script>
<script src="{{ url ('assets/js/custom-gsap.js')}}"></script>
<script src="{{ url ('assets/js/script.js')}}"></script>
<script>
  var myopWidgetOption = {
    brandColor: "#2bbcca",
    headerText: "Chat With Us",
    position: "bl",
    chatButton: "w",
    showQR: false,
    qrCodeUri: "https://t.heyo.bot/0gvssvg",
  };
</script>
<script async src="https://widget.myoperator.com/js/inject.js"></script>

<script>
        document.addEventListener('DOMContentLoaded', () => {
            const openBtn = document.getElementById('openModalBtn');
            const closeBtn = document.getElementById('closeModalBtn');
            const overlay = document.getElementById('modalOverlay');
            const form = document.getElementById('appointmentForm');
            const dateInput = document.getElementById('date');

            // Prevent users from selecting dates in the past
            const today = new Date().toISOString().split('T')[0];
            dateInput.setAttribute('min', today);

            // Open Modal
            openBtn.addEventListener('click', () => {
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden'; // Lock background scroll
            });

            // Close Modal Function
            const closeModal = () => {
                overlay.classList.remove('active');
                document.body.style.overflow = ''; // Unlock background scroll
            };

            // Close via 'X' button
            closeBtn.addEventListener('click', closeModal);

            // Close via clicking outside the modal box
            overlay.addEventListener('click', (e) => {
                if (e.target === overlay) {
                    closeModal();
                }
            });

            // Close via 'Escape' key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && overlay.classList.contains('active')) {
                    closeModal();
                }
            });

            // Handle Form Submission
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                
                // In a real application, you would send 'new FormData(form)' to your backend here.
                
                alert('Success! Your appointment request has been submitted.');
                form.reset();
                closeModal();
            });
        });
    </script>
</body>

</html>