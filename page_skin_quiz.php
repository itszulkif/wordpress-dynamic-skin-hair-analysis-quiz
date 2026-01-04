<?php
/**
 * Template Name: Professional Skin Analysis Quiz
 */
get_header(); 
?>


<!-----
tags in woocommerce products to be used for filtering:
    
Skin Type: skin-oily, skin-dry, skin-normal, skin-combination

Concern: skin-pimples, skin-dark-spots, skin-open-pores, skin-dryness, skin-oiliness

--->



<div class="skin-quiz-wrapper">
    <div class="quiz-container">
        
        <div id="quiz-header-area">
            <h1>Personalized Skin Analysis</h1>
            <div class="header-line"></div>
            <p>Reveal your Dermatological skincare routine in under 2 minutes!</p>
        </div>

        <form id="fullSkinQuiz">
            
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
                    <label class="q-opt">
                        <input type="radio" name="gender" value="Other">
                        <div class="opt-check"></div>
                        <span>Prefer Not To Say</span>
                    </label>
                </div>
                <div class="btn-wrap">
                    <button type="button" class="btn-next" onclick="moveStep(1, 2)">Continue</button>
                </div>
            </div>

            <div class="quiz-step" id="step2" style="display:none;">
                <h3 class="step-q">2. What is Your Age?</h3>
                <div class="options-container-vertical">
                    <label class="q-opt"><input type="radio" name="age" value="24-under"><span>24 or under</span></label>
                    <label class="q-opt"><input type="radio" name="age" value="25-34"><span>25-34</span></label>
                    <label class="q-opt"><input type="radio" name="age" value="34-44"><span>34-44</span></label>
                    <label class="q-opt"><input type="radio" name="age" value="45-54"><span>45-54</span></label>
                    <label class="q-opt"><input type="radio" name="age" value="55-above"><span>55 or above</span></label>
                </div>
                <div class="btn-wrap">
                    <button type="button" class="btn-next" onclick="moveStep(2, 3)">Continue</button>
                </div>
            </div>

            <div class="quiz-step" id="step3" style="display:none;">
                <h3 class="step-q">3. Do you feel your skin is?</h3>
                <div class="options-grid-img">
                    <label class="img-opt">
                        <input type="radio" name="skin_type" value="Oily">
                        <div class="opt-box">
                            <div class="img-container"><img src="http://localhost:10016/wp-content/uploads/2025/12/Fettige-Haut-scaled-1.jpg" alt="Oily"></div>
                            <span>Oily</span>
                        </div>
                    </label>
                    <label class="img-opt">
                        <input type="radio" name="skin_type" value="Dry">
                        <div class="opt-box">
                            <div class="img-container"><img src="http://localhost:10016/wp-content/uploads/2025/12/Dry-Skin-Causes-Symptoms-Best-Remedies-Featured-Images.webp" alt="Dry"></div>
                            <span>Dry</span>
                        </div>
                    </label>
                    <label class="img-opt">
                        <input type="radio" name="skin_type" value="Normal">
                        <div class="opt-box">
                            <div class="img-container"><img src="http://localhost:10016/wp-content/uploads/2025/12/studio-portrait-female_1301-2921.avif" alt="Normal"></div>
                            <span>Normal</span>
                        </div>
                    </label>
                    <label class="img-opt">
                        <input type="radio" name="skin_type" value="Combination">
                        <div class="opt-box">
                            <div class="img-container"><img src="http://localhost:10016/wp-content/uploads/2025/12/combination_skin_type_480x480.jpg" alt="Combination"></div>
                            <span>Combination</span>
                        </div>
                    </label>
                </div>
                <div class="btn-wrap">
                    <button type="button" class="btn-next" onclick="moveStep(3, 4)">Continue</button>
                </div>
            </div>

            <div class="quiz-step" id="step4" style="display:none;">
                <h3 class="step-q">4. Your biggest skin concern?</h3>
                <div class="options-grid-img">
                    <label class="img-opt">
                        <input type="radio" name="concern" value="Pimples"><div class="opt-box"><div class="img-container"><img src="http://localhost:10016/wp-content/uploads/2025/12/pimples.jpg"></div><span>Pimples</span></div>
                    </label>
                    <label class="img-opt">
                        <input type="radio" name="concern" value="Dark-Spots"><div class="opt-box"><div class="img-container"><img src="http://localhost:10016/wp-content/uploads/2025/12/Cover-Pigmentation.webp"></div><span>Dark Spots</span></div>
                    </label>
                    <label class="img-opt">
                        <input type="radio" name="concern" value="Open-Pores"><div class="opt-box"><div class="img-container"><img src="http://localhost:10016/wp-content/uploads/2025/12/How-to-Reduce-open-pores.webp"></div><span>Open Pores</span></div>
                    </label>
                    <label class="img-opt">
                        <input type="radio" name="concern" value="Dryness"><div class="opt-box"><div class="img-container"><img src="http://localhost:10016/wp-content/uploads/2025/12/Dry-Skin-Causes-Symptoms-Best-Remedies-Featured-Images.webp"></div><span>Dryness</span></div>
                    </label>
                </div>
                <div class="btn-wrap">
                    <button type="button" class="btn-next" onclick="moveStep(4, 5)">Continue</button>
                </div>
            </div>

            <div class="quiz-step" id="step5" style="display:none;">
                <h3 class="step-q">5. Reaction to the sun?</h3>
                <div class="options-container-vertical">
                    <label class="q-opt"><input type="radio" name="sun" value="Burns"><span>Burns & Turns Red</span></label>
                    <label class="q-opt"><input type="radio" name="sun" value="Tans"><span>Gets Tanned</span></label>
                </div>
                <div class="btn-wrap"><button type="button" class="btn-next" onclick="moveStep(5, 6)">Continue</button></div>
            </div>

            <div class="quiz-step" id="step6" style="display:none;">
                <h3 class="step-q">6. Daily water intake?</h3>
                <div class="options-container-vertical">
                    <label class="q-opt"><input type="radio" name="water" value="3-8"><span>3-8 Glasses</span></label>
                    <label class="q-opt"><input type="radio" name="water" value="8-plus"><span>8+ Glasses</span></label>
                </div>
                <div class="btn-wrap"><button type="button" class="btn-submit" onclick="showFinalResults()">Reveal Results</button></div>
            </div>
        </form>

        <div id="results-display" style="display:none;">
            <div class="results-header">
                <h2>Your Personalized Routine</h2>
                <p>Based on your analysis, we recommend these skin-safe products:</p>
            </div>
            <div id="product-grid" class="dynamic-results-grid"></div>
            <div style="text-align: center; margin-top: 40px;">
                <button class="btn-restart" onclick="location.reload()">Restart Quiz</button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Premium Skin Care Theme Styling */
    :root {
        --primary-color: #5D2D2C;
        --text-dark: #333;
        --text-light: #666;
        --bg-light: #fdfaf9;
        --white: #ffffff;
        --border-color: #e8e8e8;
    }

    .skin-quiz-wrapper { padding: 60px 20px; background-color: var(--bg-light); min-height: 100vh; font-family: 'Inter', sans-serif; }
    .quiz-container { max-width: 900px; margin: 0 auto; background: var(--white); padding: 50px 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.05); }

    #quiz-header-area { text-align: center; margin-bottom: 40px; }
    #quiz-header-area h1 { color: var(--primary-color); font-size: 30px; font-weight: 700; text-transform: uppercase; margin-bottom: 10px; }
    .header-line { width: 50px; height: 3px; background: var(--primary-color); margin: 0 auto 15px; }
    
    .step-q { font-size: 22px; text-align: center; margin-bottom: 35px; color: var(--text-dark); font-weight: 600; }

    /* Text Buttons */
    .options-container-vertical { display: flex; flex-direction: column; gap: 12px; max-width: 450px; margin: 0 auto 35px; }
    .q-opt { border: 1.5px solid var(--border-color); padding: 16px 20px; text-align: center; cursor: pointer; border-radius: 10px; transition: 0.3s; background: #fff; }
    .q-opt input { display: none; }
    .q-opt:hover { border-color: var(--primary-color); background: #fdf8f8; }
    .q-opt.active-opt { background: var(--primary-color); border-color: var(--primary-color); color: #fff; }

    /* Image Grid Styling */
    .options-grid-img { display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-bottom: 35px; }
    .img-opt input { display: none; }
    .opt-box { border: 2px solid var(--border-color); padding: 12px; text-align: center; border-radius: 15px; cursor: pointer; transition: 0.3s; }
    .img-container { width: 100%; height: 180px; overflow: hidden; border-radius: 10px; margin-bottom: 10px; }
    .opt-box img { width: 100%; height: 100%; object-fit: cover; transition: 0.4s; }
    .opt-box span { font-weight: 600; color: var(--text-dark); font-size: 15px; }
    .img-opt:hover img { transform: scale(1.05); }
    .img-opt input:checked + .opt-box { border-color: var(--primary-color); background: #fdf8f8; box-shadow: 0 5px 15px rgba(93, 45, 44, 0.1); }

    /* Action Buttons */
    .btn-wrap { text-align: center; }
    .btn-next, .btn-submit, .btn-restart { 
        background: var(--primary-color); color: #fff; border: none; padding: 16px 50px; cursor: pointer; 
        border-radius: 50px; font-weight: 700; transition: 0.3s; box-shadow: 0 4px 15px rgba(93, 45, 44, 0.2); 
    }
    .btn-next:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(93, 45, 44, 0.3); }

    /* Results */
    .dynamic-results-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px; }
    .prod-card { border: 1px solid var(--border-color); padding: 15px; text-align: center; border-radius: 12px; }
    .view-link { background: var(--primary-color); color: #fff; text-decoration: none; padding: 10px; display: block; border-radius: 6px; margin-top: 10px; font-size: 13px; }

    @media (max-width: 600px) {
        .quiz-container { padding: 30px 15px; }
        .options-grid-img { grid-template-columns: repeat(2, 1fr); gap: 10px; }
        .img-container { height: 130px; }
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('input[type="radio"]').on('change', function() {
        $(this).closest('.quiz-step').find('.q-opt').removeClass('active-opt');
        if($(this).parent().hasClass('q-opt')) { $(this).parent().addClass('active-opt'); }
    });
});

function moveStep(curr, next) {
    if (!$('#step' + curr + ' input:checked').val()) { alert("Please select an option!"); return; }
    $('#step' + curr).fadeOut(300, function() { 
        $('#step' + next).fadeIn(300); 
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

function showFinalResults() {
    let skin = $('input[name="skin_type"]:checked').val();
    let concern = $('input[name="concern"]:checked').val();

    $('#fullSkinQuiz, #quiz-header-area').hide();
    $('#results-display').fadeIn();
    $('#product-grid').html('<div style="grid-column: 1/-1; text-align:center; padding: 40px;"><p>Analyzing your skin data...</p></div>');

    $.ajax({
        url: '<?php echo admin_url("admin-ajax.php"); ?>',
        type: 'POST',
        data: {
            action: 'get_quiz_products',
            skin_type: skin,
            concern: concern
        },
        success: function(response) {
            $('#product-grid').html(response);
        }
    });
}
</script>

<?php get_footer(); ?>