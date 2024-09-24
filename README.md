
![image](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

![image](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

![image](https://img.shields.io/badge/Python-FFD43B?style=for-the-badge&logo=python&logoColor=blue)

<details>
      <summary>Repo Purpose</summary>
## Dissertation Introduction
The following (and files in this repository) were submitted as part of my MSc Data Science course as my final project. 

The project included; PHP, SQL, Python and HTML/CSS. 

The below comprises a summary of my dissertation/experimental methodology. For full submission, please see attached PDF. 
</details>



# An Investigation of Emphasis Effects in Data Visualisations

## Aims of The Research
For a more detailed investigation into why these hypotheses were chosen please see full document, a summary is provided in the Literature Review section. 

Hypothesis 1: Using a highlighted bar as an emphasis effect will results in faster response times from participants, compared to a standard bar chart. 
   
Hypothesis 2: Using a highlighted bar as an emphasis effect will result in more accurate response times from participants, compared to a standard bar chart. 

Hypothesis 3: Using a horizontal line to replace a bar will lead to more accurate responses from participants, compared to a standard bar. 


## Literature Review
The literature review covers related topics to the research in question. I focused on graphical literacy, data visualisation in general, bar charts specifically, visual perception and visual encoding. There is also a summary of related research. Below are some general definitions of the above terms, for detailed research please see reference list in actual submission file. HYPERLINK HERE. 

### Graphical Literacy
Visualisation literacy or graphical literacy has been defined as a concept generally understood as the ability to confidently create and interpret visual representations of data (Boy, Rensink, Bertini and Fekete, 2014).
Okan et al., (2012) examined the effect of graphical literacy levels on chart comprehension and found participants who scored higher in graphical literacy spend more time looking at key information in the graph (such as y-axis labels) and were more likely to give accurate responses. Graphical literacy could be a factor in the current research as the key metric is accuracy of estimation.

### Data Visualisation and Bar Charts
The definition of data visualisation adopted throughout this research is that proposed by Chen et al., (2013): "a field of study concerned with the transformation of data to visual representations, where the goal is the effective and efficient cognitive processing of data". 
The goal of a visualisation is to aid our understanding of data by leveraging the human visual system's highly tuned ability to see patterns, spot trends, and identify outliers (Heer et al., 2010), and when designed effectively visualisations influence the visual system's processing power to allow faster processing of data (Franconeri, Padilla, Shah, Zacks and Hullman, 2021).

A bar chart displays quantitative values for different category items. The chart comprises line marks (bars) with the size attribute (length or height) used to represent the quantitative value for each item (Kirk, 2016).
Their usage ranges from casual use for personal data to professional decision makers (Zhao et al., 2019).

### Visual Perception and Visual Encoding
Visual perception is a heavily studied topic in psychology, dominating most perception research (Eysneck and Keane, 2015). Visual perception is a key topic in data visualisation as the aim is to understand how people view information and how it is interpreted within the brain (Ware, 2019). If visual perception is understood, the knowledge can be translated into guidelines for displaying information (Ware, 2019). There are two key concepts in perception key to visualisation design; preattentive attributes and preattentive processing. 
Preattentive attributes, have been grouped into four categories: form, colour, position and motion (Ware, 2019). Preattentive processing occurs below the level of consciousness and is tuned to detect a specific set of visual attributes (Few, 2006b).

Visual encoding which is the process of converting images and visual sensory information to memory stored in the brain (Eysenck and Keane, 2015). Cleveland and McGill (1984) ranked the accuracy of each of these visual encoding options based on participants responses. The results showed that when measuring responses some visual encodings produce more accurate responses than others. The encodings are (in order of accuracy): position, length (aligned on x-axis), slope, angle, area, colour intensity, volume and colour hue. This paper is widely cited in visualisation literature as it is among the first to rank visual cues in relation to accuracy.

## Methodology
The below flow chart demonstrates how the project was setup, files are available in this repository. 

<img width="495" alt="Screenshot 2024-09-24 at 13 02 25" src="https://github.com/user-attachments/assets/abc8735d-8dd6-461e-bdcd-b5f307e5bbef">


## Findings and Evaluation
The below are the key takeaways from the research project, and a shortened version of the evaluation of the research project. 

### Findings
Hypothesis 1 stated using a highlighted bar as an emphasis effect will result in faster response times from participants, compared to a standard bar chart. Statistical testing found the median response times for the baseline chart were slightly lower, therefore faster, than the highlighted bar chart. This could be due to the number of outliers in the data which were not removed. These were not removed as the statistical power would have been reduced, however given there is no significant results a reduction in statistical power may have been acceptable. 

Hypothesis 2 stated using a highlighted bar as an emphasis effect will result in more accurate responses from participants, compared to a standard bar chart. Statistical testing showed a lower median difference for the highlighted bar than the standard bar, however there was not enough difference to reject the null hypothesis. The lower median difference in the highlighted bar suggests there could be an effect of using emphasis effects which could be investigated further. Further research into this phenomenon should consider the removal of outliers in the data and an increase in participants to accommodate the reduction of data in statistical power testing. 

Hypothesis 3 stated using a horizontal line to replace a bar will lead to more accurate responses from participants, compared to a standard bar chart. Although the median difference was lower for the horizontal line chart, the difference was not significantly different, therefore the null hypothesis could not be rejected. Although the test showed no significance there was a lower median difference suggesting further investigation is warranted. 


### Evaluation
The present literature review focussed only on the research and elements related to data visualisation design and interpretation. Further detail on the theories could lead to more ideas being generated to link the fields of visual perception and visualisation design. These can be found in detail in other published works but their inclusion in this paper could have explained the topic in further detail to facilitate a more in depth understanding of how the fields are linked.  

The research discussed preattentive processing and aimed to investigate its use in visualisation design. The link between perception and visualisation was discussed and linked together, however, the only link in the experiment was the design of the charts which were based on preattentive attributes, no research was conducted on attention.

Each of the hypotheses were statistically tested and designed to assess effectiveness as an overall measure of speed and accuracy. The speed was tested with Mann-Whitney tests, comparing the baseline chart to the emphasis effect charts, each hypothesis was evaluated, and justification given as to whether they could be rejected. Although none of the tests showed significant differences, some differences were recorded between the groups suggesting there could be an effect. Though each hypothesis was designed based on research, there are many other areas that have not been discussed in the present research. The present research focussed solely on bar charts because they are the most common. However, other research has investigated the emphasis effects on scatter plots (Mairena et al., 2020).

Finally, the research aimed to make suggestions to visualisation design based on this preliminary research on future emphasis effects. The present study has not made any recommendations on visualisation design for various reasons. Firstly, graphical literacy was not tested in the hypotheses, so it cannot be known if these emphasis effects are effective across the whole population. Similarly, race/ethnicity/location was not recorded so it is not possible to know if different parts of the population interpret different emphasis effects differently. For example, where colour was used there are cultural and societal expectations of colour, such as, red can mean anger in some cultures and happiness/luck in others. Therefore, the colour being used could affect how participants interpreted the value.
