{extends file='../../BaseTemplate.tpl'}
{block name=body}
    {* We have the following conversations: <br><br>
    {if $act == 'rate'}
        Thanks for rating conversation <b>{$rate}</b>
    {/if}

    <ul>
    {foreach from=$convs item=conv}
        <li><a href="/rate/{$conv->ID()}">{$conv->identifier()}</a></li>
    {/foreach}
    </ul> *}

    <section>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-5 panel twocol">
                    <h2>ING Chatbot</h2>
                    <img src="/img/imgChatbot.png" class="img_normal" alt="ING chatbot" > 
                </div>
                
                <div class="col-md-5 panel twocol">
                    <h2>Instructions</h2>
                    <p>Hello!</p>
                    <p>
                        Thank you for helping us evaluate our chatbot system! 
                        Your upcoming task consists of analyzing chatbot conversations and determining if the user left the conversation feeling satisfied or not.
                    </p>
                    <p>
                        Once you start the annotation process, conversations will be displayed on the left. During these conversations the user was tasked with finding a restaurant based on several specification such as location, cuisine type and price range. If no restaurant was found, the user had to ask for an alternative. After reading the conversation, please indicate how satisfied you think the user felt after their conversation.

                    </p>
                    <p>
                        If the user was not satisfied you have to select one or more sentences in the conversation where you think the user felt dissatisfied.For each sentence you select, you will then be able to choose one or more reasons as to why the user would be dissatisfied at that moment. These reasons include:    
                    </p>
                    <p>
                        <ul>
                        <li>The system was unable to understand the intent of the user (for example: the user asks for a restaurant in the east part of town, but the system responds with eastern style cuisine)</li>
        	            <li>The system did not understand the wording of the user (for example: the user says things that the system is unable to give a new response to)</li>
        	            <li>The system was unable to provide the user with the right information (for example: no matching restaurants were found)</li>
                        </ul>
                    </p>
                    <p>If you want to add your own reason you can do so by selecting “Other”.
                    </p>
                    <p>
                       Please try to answer the questions to the best of your abilities. To begin press “Start”. To go to the next conversation and save the annotation press “Submit”. You can always go back to the instruction page by clicking “exit”. 
                    </p>
                    <button type="button" id="startbtn">Start</button> 
                </div>
            </div>
        </div>
    </section>

    <script>
    $(document).ready(function() {

        // Listen to button click
        $("#startbtn").click(function() {
            
            // Redirect to rate page
            window.location.href = "/rate";
        });
    });
    </script>
{/block}
