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
                    
                    <button class="viewMore" data-toggle="collapse" data-target="#model">View more</button>
                    <div id="model" class="collapse">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Model name</th>
                                    <td>Logistic regression</td>
                                </tr>
                                <tr>
                                    <th scope="row">Accuracy</th>
                                    <td>76.27</td>
                                </tr>
                                <tr>
                                    <th scope="row">Precision</th>
                                    <td>86.11</td>
                                </tr>
                                <tr>
                                    <th scope="row">Recall</th>
                                    <td>77.50</td>
                                </tr>
                            </tbody>
                        </table>

                        <hr>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>features</th>
                                    <th>correlation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Number of repetition</td>
                                    <td>-0.478</td>
                                </tr>
                                <tr>
                                    <td>Number of repetition percentage</td>
                                    <td>-0.522</td>
                                </tr>
                                <tr>
                                    <td>Length of conversation</td>
                                    <td>-0.354</td>
                                </tr>
                                <tr>
                                    <td>Total compound score</td>
                                    <td>-0.098</td>
                                </tr>
                                <tr>
                                    <td>Average positive score</td>
                                    <td>0.064</td>
                                </tr>
                                <tr>
                                    <td>Average negative score</td>
                                    <td>-0.022</td>
                                </tr>
                                <tr>
                                    <td>Summation TF-IDF score </td>
                                    <td>0.140</td>
                                </tr>
                                <tr>
                                    <td>Average TF-IDF score</td>
                                    <td>0.027</td>
                                </tr>
                                <tr>
                                    <td>Summation w2v score</td>
                                    <td>0.278</td>
                                </tr>
                                <tr>
                                    <td>Average w2v score</td>
                                    <td>-0.041</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <script src="/js/admin.js"></script>

    <script> 
        $(document).ready(function() {
            createSatisfactionChart({$satisfiedPercentage});
            createSatisfactionOverTimeChart({$rateOverTime|json_encode});
            createAgreementSpectrumChart({$sdsat}, {$dsat}, {$neut}, {$sat}, {$ssat});
            createModelChart({$modelRateOverTime|json_encode});
        });
    </script>

{/block}