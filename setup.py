from setuptools import setup, find_packages
	
setup(
    name='aedesproject_uif',
    version='4.0.0',
    author='Tayco, Frances Claire, Ligot, Dominic Vincent, and Soong, Gabriel Kristopher',
    author_email='support@aedesproject.org',
    description='Advanced Early Detection and Exploration Service (AEDES) by CirroLytix aims to improve public health response against dengue in the Philippines by predicting dengue cases from climate and digital data and pinpointing possible hotspots from satellite data.',
    long_description=open('README.md', encoding='utf-8').read(),
    long_description_content_type='text/markdown',
	python_requires='>=3.8',
    packages=find_packages(where='src', exclude=["tests*"]),
    package_dir={'': 'src'},
    include_package_data=True,
    install_requires=open('requirements.txt').read().splitlines(),
	url='https://github.com/Cirrolytix/aedesproject-uif',
    license='MIT License',
    zip_safe=False    # This line is added to ensure the package is not installed as an egg
)
