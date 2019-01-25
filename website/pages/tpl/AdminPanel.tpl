{extends file='../../BaseTemplate.tpl'}
{block name=body}
    <section>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-5 panel twocol">
                    <h2 class ="headText">Chatbot performance</h2>
                    <div class="chart" id="chartContainer_doughnut" style="height: 370px; width: 100%;"></div>
                    <button class="btn invisible" id="backButton">&lt; Back</button>
                    
                    <button class="viewMore" data-toggle="collapse" data-target="#chatbot">View more</button>
                    <div id="chatbot" class="collapse">
                        <h2 class ="headText">Extra information</h2>
                        <div class="chart" id="chartContainer_Satisfaction_overtime" style="height: 370px; width: 100%;"></div>
                    
                        <div class="chart" id="chartContainer_Barchart" style="height: 370px; width: 100%;"></div>
                    </div> 
                </div>
                
                <div class="col-md-5 panel twocol">
                    <h2 class ="headText">Model performance</h2>
                    <div class="chart" id="chartContainer_Satisfaction_overtime_model" style="height: 370px; width: 100%;"></div>
                    
                    {* <button class="viewMore" data-toggle="collapse" data-target="#model">View more</button>
                    <div id="model" class="collapse">
                        <h2 class ="headText">Extra information</h2>
                        <p>Here needs text from Kira and Manon</p>
                    </div>  *}
                </div>
            </div>
        </div>
    </section>

    <script src="/js/admin.js"></script>

    <script> 
        $(document).ready(function() {
            createSatisfactionChart({$satisfiedPercentage});
            createSatisfactionOverTimeChart();
            createAgreementSpectrumChart();
        });
    </script>

{/block}