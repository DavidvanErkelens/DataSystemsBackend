/**
 *  File containing the basic function to render the charts in the dashboard panel
 */


// Function to create the satisfaction rate doughnut chart
function createSatisfactionChart(satisfiedPercentage) {

    var satisfactionData = {
        "Chatbot satisfaction rate": [{
            // click: ChartClickEventHandler,
            // cursor: "pointer",
            explodeOnClick: false,
            innerRadius: "75%",
            legendMarkerType: "square",
            name: "Satisfied vs Dissatisfied",
            radius: "100%",
            showInLegend: true,
            startAngle: 0,
            type: "doughnut",
            dataPoints: [
                {"y": satisfiedPercentage,       "name" : "Satisfied", "color": "Green"}, 
                {"y": 100 - satisfiedPercentage, "name" : "Dissatisfied", "color": "Red"}
            ]
        }],
    };

    var satisfiedvsDissatisfiedOptions = {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: "Chatbot Satisfaction rate",
            fontSize: 24,
            fontColor: '#ff6200',
        },
        subtitles: [{
            text: "Click on the parts for the reasons",
            /*backgroundColor: "#ff6200",*/
            fontSize: 16,
            fontColor: 'black',
            padding: 5
        }],
        legend: {
            fontFamily: "calibri",
            fontSize: 14,
            horizontalAlign: "center", // left, center ,right 
            verticalAlign: "top",  // top, center, bottom
            itemTextFormatter: function (e) {
                return e.dataPoint.name + ": " + e.dataPoint.y + "%";  
            }
        },
        data: []
    };
        
    var chart = new CanvasJS.Chart("chartContainer_doughnut", satisfiedvsDissatisfiedOptions);
    chart.options.data = satisfactionData["Chatbot satisfaction rate"];
    chart.render();

    // function ChartClickEventHandler(e) {
    //     //click event handler
    //     if(e.dataPoint.name =="Satisfied"){
    //         var reasons = "<ul><li>The system was able to answer the users’ question(s) : 25%</li>";
    //         reasons += "<li>The system was able to interact with the user well: 35%</li>";
    //         reasons += "<li>The user was able to talk to the system naturally : 35%</li>";
    //         reasons += "<li>Other: 5%</li></ul>";
    //         $( "#chartContainer_doughnut" ).html( "<h2>"+  e.dataPoint.name +"</h2>"+  reasons );
            
    //     }else{
    //         var reasons = "<ul><li>The system was unable to understand the user : 25%</li>";
    //         reasons += "<li>The user did not know how to talk to the system: 35%</li>";
    //         reasons += "<li>The system did not have enough information available to answer the user: 35%</li>";
    //         reasons += "<li>Other: 5%</li></ul>";
    //         $( "#chartContainer_doughnut" ).html( "<h2>"+  e.dataPoint.name +"</h2>"+  reasons );
    //     }
        
    //     $("#backButton").toggleClass("invisible");
    // }

    // $("#backButton").click(function() { 
    //     $(this).toggleClass("invisible");
    //     chart = new CanvasJS.Chart("chartContainer_doughnut", SatisfiedvsDissatisfiedOptions);
    //     chart.options.data = satisfactionData["Chatbot Satisfaction rate"];
    //     chart.render();
    // });    
}

function createSatisfactionOverTimeChart(percentages) {

    var dataPoints = [];

    for (var key in percentages) {
        perc = percentages[key];
        dataPoints.push({ x: new Date(2018, 11, key), y: perc });
    }

    /* The line graph for the satisfaction rate over time according to the annotators*/
    var chart = new CanvasJS.Chart("chartContainer_Satisfaction_overtime", {
        animationEnabled: true,
        theme: "light2",
        width: 430,
        title:{
            text: "Satisfaction rate over time",
            fontSize: 24,
            fontColor: '#ff6200',
        },
        axisY:{
            includeZero: false,
            title: "Satisfaction rate in %",
        },
        axisX:{
        valueFormatString: "DD MMM",
        crosshair: {
            enabled: true,
            snapToDataPoint: true
            }
        },
        legend:{
            cursor:"pointer",
            verticalAlign: "bottom",
            horizontalAlign: "left",
            dockInsidePlotArea: true
        },
        data: [{        
            type: "line",       
            dataPoints: dataPoints
        }]
    });
    chart.render();
}

function createAgreementSpectrumChart(sdsat, dsat, neut, sat, ssat) {
    /* The barchart for the 5 categories from strongly agree to strongly disagree*/
    var chart = new CanvasJS.Chart("chartContainer_Barchart", {
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        width: 430, 
        title:{
            text: "Distribution of satisfaction",
            fontSize: 24,
            fontColor: '#ff6200',
        },
        axisY: {
            title: "People in %"
        },
        data: [{        
            type: "column",  
                
            dataPoints: [      
                { y: sdsat,  label: "Strongly dissatisfied" , color:"red"},
                { y: dsat,  label: "Dissatisfied" , color:"orange"},
                { y: neut,  label: "Neutral" , color:"yellow"},
                { y: sat,  label: "Satisfied" , color:"lightgreen"},
                { y: ssat,  label: "Strongly satisfied" , color:"green"},
            ]
        }]
    });
    chart.render();
}

function createModelChart(percentages) {

    var dataPoints = [];

    console.log(percentages);

    for (var key in percentages) {
        perc = percentages[key];
        dataPoints.push({ x: new Date(2018, 11, key), y: perc });
    }

    /* The line graph for the satisfaction rate over time according to the model*/
    var chart = new CanvasJS.Chart("chartContainer_Satisfaction_overtime_model", {
        animationEnabled: true,
        theme: "light2",
        title:{
            text: "Satisfaction rate over time",
            fontSize: 24,
            fontColor: '#ff6200',
        },
        axisY:{
            includeZero: false,
            title: "Satisfaction rate in %",
        },
        axisX:{
        valueFormatString: "DD MMM",
        crosshair: {
            enabled: true,
            snapToDataPoint: true
            }
        },
        legend:{
            cursor:"pointer",
            verticalAlign: "bottom",
            horizontalAlign: "left",
            dockInsidePlotArea: true
        },
        data: [{        
            type: "line",       
            dataPoints: dataPoints
        }]
    });
    
    chart.render();

}
