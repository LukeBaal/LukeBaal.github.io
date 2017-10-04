#include <stdio.h>
#include <stdlib.h>
#include <string.h>

//Given a word of 30 chars or less,
//fix the capatilization
void CapFix(char word[30]){
	int j;
	//If first letter in word is not capatilized,
	//capatilize it
	if (word[0] >= 'a' && word[0] <= 'z')
		word[0]=word[0]-'a'+'A';

	//If any letter after the first is capatilized,
	//uncapatilize it
	for (j=1; j<strlen(word); j++)
		if (word[j] >= 'A' && word[j] <= 'Z')
			word[j]=word[j]-'A'+'a';

	//Print the word
	printf("%s",word);
}

//Read the data fromthe file to two arrays, then fix
//their capatilization
int ReadData(FILE *fpt, char first[20][30], char last[20][30]){
	int total=0;
	//Until the EOF is reached, read each line of the file
	while (1) {
		if (fscanf(fpt,"%s %s",last[total],first[total]) != 2)
			break;
		total++;
	}
	//For each line of the file, fix the two names
	for (int i=0; i<total;i++){
		CapFix(first[i]);
		printf(" ");
		CapFix(last[i]);
		printf("\n");
	}
	return 0;
}

int main(int argc, char *argv[]) {
	FILE *fpt;
	char first[20][30],last[20][30];

	//If filename for text input was not given,
	//exit
	if (argc != 2) {
		printf("Usage: CAPFIX [filename]\n");
		exit(0);
	}
	//If file does not exist, exit
	if ((fpt=fopen(argv[1],"r")) == NULL) {
		printf("Unable to open %s for reading\n",argv[1]);
		exit(0);
	}
	//Read the data and fix capitilization
	ReadData(fpt, first, last);

	//Close the file
	fclose(fpt);
}
