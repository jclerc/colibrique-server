<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mark
 *
 * @ORM\Table(name="mark")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MarkRepository")
 */
class Mark
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="mark", type="integer")
     */
    private $mark;

    /**
     * @var int
     *
     * @ORM\Column(name="out_of", type="integer")
     */
    private $out_of;

    /**
     * @var int
     *
     * @ORM\Column(name="trimester", type="integer")
     */
    private $trimester;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=100, nullable=true)
     */
    private $label;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="marks")
     * @ORM\JoinColumn(name="student_id", referencedColumnName="id")
     */
    private $student;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Course")
     * @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     */
    private $course;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Exam")
     * @ORM\JoinColumn(name="exam_id", referencedColumnName="id", nullable=true)
     */
    private $exam;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Work")
     * @ORM\JoinColumn(name="work_id", referencedColumnName="id", nullable=true)
     */
    private $work;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mark
     *
     * @param integer $mark
     *
     * @return Mark
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return int
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set outOf
     *
     * @param integer $outOf
     *
     * @return Mark
     */
    public function setOutOf($outOf)
    {
        $this->out_of = $outOf;

        return $this;
    }

    /**
     * Get outOf
     *
     * @return int
     */
    public function getOutOf()
    {
        return $this->out_of;
    }

    /**
     * Set trimester
     *
     * @param integer $trimester
     *
     * @return Mark
     */
    public function setTrimester($trimester)
    {
        $this->trimester = $trimester;

        return $this;
    }

    /**
     * Get trimester
     *
     * @return int
     */
    public function getTrimester()
    {
        return $this->trimester;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Mark
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Mark
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set student
     *
     * @param \AppBundle\Entity\User $student
     *
     * @return Mark
     */
    public function setStudent(\AppBundle\Entity\User $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \AppBundle\Entity\User
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set course
     *
     * @param \AppBundle\Entity\Course $course
     *
     * @return Mark
     */
    public function setCourse(\AppBundle\Entity\Course $course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \AppBundle\Entity\Course
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set exam
     *
     * @param \AppBundle\Entity\Exam $exam
     *
     * @return Mark
     */
    public function setExam(\AppBundle\Entity\Exam $exam = null)
    {
        $this->exam = $exam;

        return $this;
    }

    /**
     * Get exam
     *
     * @return \AppBundle\Entity\Exam
     */
    public function getExam()
    {
        return $this->exam;
    }

    /**
     * Set work
     *
     * @param \AppBundle\Entity\Work $work
     *
     * @return Mark
     */
    public function setWork(\AppBundle\Entity\Work $work = null)
    {
        $this->work = $work;

        return $this;
    }

    /**
     * Get work
     *
     * @return \AppBundle\Entity\Work
     */
    public function getWork()
    {
        return $this->work;
    }
}
