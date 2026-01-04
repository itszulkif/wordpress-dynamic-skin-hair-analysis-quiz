<?php
/**
 * Template Name: Professional Hair Analysis Quiz
 */
get_header(); 
?>

<!----
Tags in woocommerce products to be used for filtering:

Scalp Type: hair-oily, hair-dry, hair-dandruff, hair-normal

Concern: hair-fall, hair-frizz, hair-damage, hair-thinning

---->

<div class="hair-quiz-wrapper">
    <div class="quiz-container">
        
        <div id="quiz-header-area">
            <h1>Hair Analysis Quiz</h1>
            <div class="header-line"></div>
            <p>Find the perfect routine for your unique hair type in seconds!</p>
        </div>

        <form id="fullHairQuiz">
            
            <div class="quiz-step active" id="step1">
                <h3 class="step-q">1. What is Your Gender?</h3>
                <div class="options-container-vertical">
                    <label class="q-opt">
                        <input type="radio" name="gender" value="Male">
                        <div class="opt-check"></div>
                        <span>Male</span>
                    </label>
                    <label class="q-opt">
                        <input type="radio" name="gender" value="Female">
                        <div class="opt-check"></div>
                        <span>Female</span>
                    </label>
                </div>
                <div class="btn-wrap">
                    <button type="button" class="btn-next" onclick="moveStep(1, 2)">Continue</button>
                </div>
            </div>

            <div class="quiz-step" id="step2" style="display:none;">
                <h3 class="step-q">2. What is your primary hair goal?</h3>
                <div class="options-grid-img">
                    <label class="img-opt">
                        <input type="radio" name="hair_goal" value="Growth">
                        <div class="opt-box">
                            <div class="img-container">
                                <img src="http://localhost:10016/wp-content/uploads/2026/01/Rosemary_Redensyl_Hair_Growth_Serum_f886ddd3-7a1d-4a7a-8ada-1acf55f56d8d_large.webp" alt="Growth">
                            </div>
                            <span>Hair Growth</span>
                        </div>
                    </label>
                    <label class="img-opt">
                        <input type="radio" name="hair_goal" value="Volume">
                        <div class="opt-box">
                            <div class="img-container">
                                <img src="http://localhost:10016/wp-content/uploads/2026/01/7c17728f-3fad-402e-8b24-eb81580ec02d-how-to-get-sexy-hair-with-volume.jpg" alt="Volume">
                            </div>
                            <span>More Volume</span>
                        </div>
                    </label>
                </div>
                <div class="btn-wrap">
                    <button type="button" class="btn-next" onclick="moveStep(2, 3)">Continue</button>
                </div>
            </div>

            <div class="quiz-step" id="step3" style="display:none;">
                <h3 class="step-q">3. Describe your scalp type?</h3>
                <div class="options-container-vertical">
                    <label class="q-opt">
                        <input type="radio" name="scalp_type" value="Oily">
                        <div class="opt-check"></div>
                        <span>Oily (Greasy quickly)</span>
                    </label>
                    <label class="q-opt">
                        <input type="radio" name="scalp_type" value="Dry">
                        <div class="opt-check"></div>
                        <span>Dry & Itchy</span>
                    </label>
                    <label class="q-opt">
                        <input type="radio" name="scalp_type" value="Dandruff">
                        <div class="opt-check"></div>
                        <span>Flaky / Dandruff</span>
                    </label>
                    <label class="q-opt">
                        <input type="radio" name="scalp_type" value="Normal">
                        <div class="opt-check"></div>
                        <span>Normal</span>
                    </label>
                </div>
                <div class="btn-wrap">
                    <button type="button" class="btn-next" onclick="moveStep(3, 4)">Continue</button>
                </div>
            </div>

            <div class="quiz-step" id="step4" style="display:none;">
                <h3 class="step-q">4. What is your biggest hair concern?</h3>
                <div class="options-grid-img">
                    <label class="img-opt">
                        <input type="radio" name="hair_concern" value="Hair-Fall">
                        <div class="opt-box">
                            <div class="img-container"><img src="http://localhost:10016/wp-content/uploads/2026/01/Hair_Fall_Image_6390188b-e026-4482-aa72-dfca365f8115.webp" alt="Hair Fall"></div>
                            <span>Hair Fall</span>
                        </div>
                    </label>
                    <label class="img-opt">
                        <input type="radio" name="hair_concern" value="Frizz">
                        <div class="opt-box">
                            <div class="img-container"><img src="http://localhost:10016/wp-content/uploads/2026/01/istockphoto-1511087244-612x612-1.jpg " alt="Frizz"></div>
                            <span>Frizz Control</span>
                        </div>
                    </label>
                    <label class="img-opt">
                        <input type="radio" name="hair_concern" value="Damage">
                        <div class="opt-box">
                            <div class="img-container"><img src="http://localhost:10016/wp-content/uploads/2026/01/protect-your-hair-from-sunlight.jpg" alt="Damage"></div>
                            <span>Split Ends</span>
                        </div>
                    </label>
                    <label class="img-opt">
                        <input type="radio" name="hair_concern" value="Thinning">
                        <div class="opt-box">
                            <div class="img-container"><img src="http://localhost:10016/wp-content/uploads/2026/01/hair-thinning-causes-types-treatments_c4c354ac-0f4b-4312-89c8-36b8fc87591d.webp" alt="Thinning"></div>
                            <span>Thinning Hair</span>
                        </div>
                    </label>
                </div>
                <div class="btn-wrap">
                    <button type="button" class="btn-submit" onclick="showHairResults()">See My Routine</button>
                </div>
            </div>
        </form>

        <div id="results-display" style="display:none;">
            <div class="results-header">
                <h2>Your Hair Care Ritual</h2>
                <p>Based on your analysis, we recommend these products:</p>
            </div>
            <div id="hair-product-grid" class="dynamic-results-grid"></div>
            <div style="text-align: center; margin-top: 40px;">
                <button class="btn-restart" onclick="location.reload()">Restart Quiz</button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Professional Styling */
    :root {
        --primary-color: #5D2D2C;
        --text-dark: #333;
        --text-light: #666;
        --bg-light: #f9f9f9;
        --white: #ffffff;
        --border-color: #e0e0e0;
    }

    .hair-quiz-wrapper { 
        padding: 60px 20px; 
        background-color: var(--bg-light); 
        min-height: 100vh; 
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    }

    .quiz-container { 
        max-width: 900px; 
        margin: 0 auto; 
        background: var(--white); 
        padding: 50px 40px; 
        border-radius: 20px; 
        box-shadow: 0 15px 40px rgba(0,0,0,0.05); 
    }

    #quiz-header-area { text-align: center; margin-bottom: 40px; }
    #quiz-header-area h1 { color: var(--primary-color); font-size: 32px; font-weight: 700; margin-bottom: 10px; }
    .header-line { width: 60px; height: 3px; background: var(--primary-color); margin: 0 auto 15px; }
    #quiz-header-area p { color: var(--text-light); font-size: 16px; }

    .step-q { font-size: 22px; text-align: center; margin-bottom: 35px; color: var(--text-dark); font-weight: 600; }

    /* Vertical Text Options */
    .options-container-vertical { display: flex; flex-direction: column; gap: 15px; max-width: 450px; margin: 0 auto 40px; }
    .q-opt { 
        position: relative;
        border: 1.5px solid var(--border-color); 
        padding: 18px 25px; 
        display: flex; 
        align-items: center; 
        cursor: pointer; 
        border-radius: 12px; 
        transition: all 0.3s ease; 
        background: #fff;
    }
    .q-opt input { display: none; }
    .q-opt span { font-weight: 500; font-size: 16px; color: var(--text-dark); }
    .q-opt:hover { border-color: var(--primary-color); background: #fdf8f8; }
    .q-opt.active-opt { border-color: var(--primary-color); background: var(--primary-color); }
    .q-opt.active-opt span { color: #fff; }

    /* Image Grid Styling */
    .options-grid-img { 
        display: grid; 
        grid-template-columns: repeat(2, 1fr); 
        gap: 20px; 
        margin-bottom: 40px; 
    }
    .img-opt input { display: none; }
    .opt-box { 
        border: 2px solid var(--border-color); 
        padding: 15px; 
        text-align: center; 
        border-radius: 15px; 
        cursor: pointer; 
        transition: 0.3s;
        height: 100%;
    }
    .img-container { width: 100%; height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 12px; }
    .opt-box img { width: 100%; height: 100%; object-fit: cover; transition: 0.5s; }
    .opt-box span { font-weight: 600; color: var(--text-dark); display: block; }
    
    .img-opt:hover .opt-box { border-color: var(--primary-color); }
    .img-opt:hover img { transform: scale(1.05); }
    .img-opt input:checked + .opt-box { border-color: var(--primary-color); background: #fdf8f8; box-shadow: 0 5px 15px rgba(93, 45, 44, 0.1); }

    /* Buttons */
    .btn-wrap { text-align: center; }
    .btn-next, .btn-submit, .btn-restart { 
        background: var(--primary-color); 
        color: #fff; 
        border: none; 
        padding: 16px 50px; 
        cursor: pointer; 
        border-radius: 50px; 
        font-size: 16px; 
        font-weight: 700; 
        transition: 0.3s; 
        letter-spacing: 1px;
        box-shadow: 0 4px 15px rgba(93, 45, 44, 0.3);
    }
    .btn-next:hover, .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(93, 45, 44, 0.4); }

    /* Results Styling */
    .results-header { text-align: center; margin-bottom: 30px; }
    .results-header h2 { color: var(--primary-color); font-size: 28px; }
    .dynamic-results-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; }
    
    .prod-card { 
        background: #fff;
        border: 1px solid var(--border-color); 
        padding: 20px; 
        text-align: center; 
        border-radius: 15px; 
        transition: 0.3s;
    }
    .prod-card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.08); }
    .prod-card img { width: 100%; border-radius: 10px; margin-bottom: 15px; }
    .prod-card h4 { font-size: 16px; margin: 10px 0; color: var(--text-dark); }
    .view-link { 
        background: var(--primary-color); 
        color: #fff; 
        text-decoration: none; 
        padding: 12px; 
        display: block; 
        border-radius: 8px; 
        margin-top: 15px; 
        font-weight: 600;
        font-size: 14px;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .quiz-container { padding: 30px 20px; }
        .img-container { height: 140px; }
        .options-grid-img { gap: 12px; }
        .step-q { font-size: 18px; }
        #quiz-header-area h1 { font-size: 26px; }
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Add active class on click for visual feedback
    $('input[type="radio"]').on('change', function() {
        let parentStep = $(this).closest('.quiz-step');
        parentStep.find('.q-opt').removeClass('active-opt');
        if($(this).parent().hasClass('q-opt')) {
            $(this).parent().addClass('active-opt');
        }
    });
});

function moveStep(curr, next) {
    if (!$('#step' + curr + ' input:checked').val()) { 
        alert("Please select an option before moving forward."); 
        return; 
    }
    $('#step' + curr).fadeOut(300, function() { 
        $('#step' + next).fadeIn(300); 
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

function showHairResults() {
    let scalp = $('input[name="scalp_type"]:checked').val();
    let concern = $('input[name="hair_concern"]:checked').val();

    if (!concern) { alert("Please select your concern."); return; }

    $('#fullHairQuiz, #quiz-header-area').hide();
    $('#results-display').fadeIn();
    $('#hair-product-grid').html('<div style="grid-column: 1/-1; text-align:center; padding: 40px;"><p>Creating your personalized hair ritual...</p></div>');

    $.ajax({
        url: '<?php echo admin_url("admin-ajax.php"); ?>',
        type: 'POST',
        data: {
            action: 'get_hair_products',
            scalp_type: scalp,
            hair_concern: concern
        },
        success: function(response) {
            $('#hair-product-grid').html(response);
        }
    });
}
</script>

<?php get_footer(); ?>