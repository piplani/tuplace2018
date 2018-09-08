#include<iostream>
#include<fstream>
#include<vector>
using namespace std;

struct Project {
	string title = "";
	string summary = "";
	string domian = "";
	string tool = "";
	string technique = "";
	string optimizationTechnique = "";
	string teamSize = "";
	string leader = "";
	string link = "";
	string outcome = "";
};

Project *newProject(string title, string summary, string domian, string tool, string technique, string optimizationTechnique, string teamSize, string leader, string link, string outcome) {
	Project *p = new Project();
	p->title = title;
	p->summary = summary;
	p->domian = domian;
	p->tool = tool;
	p->technique = technique;
	p->optimizationTechnique = optimizationTechnique;
	p->teamSize = teamSize;
	p->leader = leader;
	p->link = link;
	p->outcome = outcome;
	return p;
}

main() {
	ifstream fin;
	fin.open("data_pp.txt", ios::in);

	char c;
	string record = "";
	string value = "";
	Project* project;
	vector<Project*> projects;

	while(!fin.eof()) {
		fin.get(c);

		if(c==';') {
			record += trim(value);
			value = "";
		}
		else if(c=='~') {
			// project = record2object(record);
			// projects.push_back(project);
			cout<<record<<"\n\n";
			record = "";
		}
		else value = value + c;
	}


	return 0;
}